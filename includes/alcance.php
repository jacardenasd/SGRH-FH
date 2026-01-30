<?php
/**
 * includes/alcance.php
 * Sistema de Alcance Organizacional
 * 
 * Define qué datos puede ver/modificar cada usuario según:
 * - Empresa (ya controlado por usuario_empresas)
 * - Unidades organizacionales
 * - Adscripciones/Departamentos
 * 
 * Compatible con PHP 5.7 - NO usar operador ??
 */

require_once __DIR__ . '/conexion.php';

/**
 * Obtiene el alcance organizacional de un usuario
 * 
 * @param int $usuario_id
 * @param int $empresa_id
 * @return array ['unidades' => [1,3,5], 'adscripciones' => [10,15]]
 *               Si arrays vacíos = SIN RESTRICCIONES (puede ver todo de la empresa)
 */
function get_usuario_alcance($usuario_id, $empresa_id) {
    global $pdo;
    
    $uid = (int)$usuario_id;
    $eid = (int)$empresa_id;
    
    // Obtener permisos_especiales del usuario (usuarios no tiene empresa_id, es 1:N via usuario_empresas)
    $stmt = $pdo->prepare("SELECT permisos_especiales FROM usuarios WHERE usuario_id = :uid LIMIT 1");
    $stmt->execute([':uid' => $uid]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $alcance = [
        'unidades' => [],
        'adscripciones' => []
    ];
    
    if (!$row || empty($row['permisos_especiales'])) {
        return $alcance; // Sin restricciones
    }
    
    $data = json_decode($row['permisos_especiales'], true);
    
    if (!is_array($data)) {
        return $alcance; // JSON inválido = sin restricciones
    }
    
    // Extraer unidades permitidas
    if (isset($data['unidades_permitidas']) && is_array($data['unidades_permitidas'])) {
        $alcance['unidades'] = array_map('intval', $data['unidades_permitidas']);
    }
    
    // Extraer adscripciones permitidas
    if (isset($data['adscripciones_permitidas']) && is_array($data['adscripciones_permitidas'])) {
        $alcance['adscripciones'] = array_map('intval', $data['adscripciones_permitidas']);
    }
    
    return $alcance;
}

/**
 * Aplica filtros de alcance a una query SQL
 * 
 * @param array &$where_parts Array de condiciones WHERE (se modifica por referencia)
 * @param array &$params Array de parámetros PDO (se modifica por referencia)
 * @param string $tabla_alias Alias de la tabla principal en el query (ej: 'p', 'e')
 * @param array $alcance Resultado de get_usuario_alcance()
 * @param array $opciones Configuración adicional:
 *                        - 'campo_unidad': nombre del campo de unidad_id (default: 'unidad_id')
 *                        - 'campo_adscripcion': nombre del campo de adscripcion_id (default: 'adscripcion_id')
 */
function aplicar_filtro_alcance(&$where_parts, &$params, $tabla_alias, $alcance, $opciones = array()) {
    // Valores por defecto para opciones (PHP 5.7 compatible)
    $campo_unidad = isset($opciones['campo_unidad']) ? $opciones['campo_unidad'] : 'unidad_id';
    $campo_adscripcion = isset($opciones['campo_adscripcion']) ? $opciones['campo_adscripcion'] : 'adscripcion_id';
    
    $alias = $tabla_alias ? ($tabla_alias . '.') : '';
    
    // Filtrar por unidades permitidas
    if (!empty($alcance['unidades'])) {
        $placeholders = array();
        foreach ($alcance['unidades'] as $idx => $unidad_id) {
            $key = ':alcance_unidad_' . $idx;
            $placeholders[] = $key;
            $params[$key] = (int)$unidad_id;
        }
        $where_parts[] = $alias . $campo_unidad . ' IN (' . implode(',', $placeholders) . ')';
    }
    
    // Filtrar por adscripciones permitidas
    if (!empty($alcance['adscripciones'])) {
        $placeholders = array();
        foreach ($alcance['adscripciones'] as $idx => $adsc_id) {
            $key = ':alcance_adsc_' . $idx;
            $placeholders[] = $key;
            $params[$key] = (int)$adsc_id;
        }
        $where_parts[] = $alias . $campo_adscripcion . ' IN (' . implode(',', $placeholders) . ')';
    }
}

/**
 * Verifica si un usuario tiene alcance para ver/editar un registro específico
 * 
 * @param array $alcance Resultado de get_usuario_alcance()
 * @param int $unidad_id Unidad del registro
 * @param int $adscripcion_id Adscripción del registro (opcional)
 * @return bool true si tiene alcance, false si está restringido
 */
function tiene_alcance($alcance, $unidad_id, $adscripcion_id = null) {
    $uid = (int)$unidad_id;
    $aid = $adscripcion_id !== null ? (int)$adscripcion_id : null;
    
    // Sin restricciones = tiene alcance a todo
    $sin_restricciones = empty($alcance['unidades']) && empty($alcance['adscripciones']);
    if ($sin_restricciones) {
        return true;
    }
    
    // Verificar unidad
    if (!empty($alcance['unidades']) && !in_array($uid, $alcance['unidades'])) {
        return false;
    }
    
    // Verificar adscripción (si aplica)
    if ($aid !== null && !empty($alcance['adscripciones']) && !in_array($aid, $alcance['adscripciones'])) {
        return false;
    }
    
    return true;
}

/**
 * Obtiene lista de unidades permitidas para mostrar en combos/filtros
 * 
 * @param int $usuario_id
 * @param int $empresa_id
 * @return array Lista de unidades [{unidad_id, nombre}, ...]
 */
function get_unidades_permitidas($usuario_id, $empresa_id) {
    global $pdo;
    
    $alcance = get_usuario_alcance($usuario_id, $empresa_id);
    
    $sql = "SELECT unidad_id, nombre FROM org_unidades WHERE empresa_id = :empresa_id AND estatus = 1";
    $params = [':empresa_id' => (int)$empresa_id];
    
    // Si tiene restricciones, filtrar
    if (!empty($alcance['unidades'])) {
        $placeholders = array();
        foreach ($alcance['unidades'] as $idx => $uid) {
            $key = ':unidad_' . $idx;
            $placeholders[] = $key;
            $params[$key] = (int)$uid;
        }
        $sql .= ' AND unidad_id IN (' . implode(',', $placeholders) . ')';
    }
    
    $sql .= ' ORDER BY nombre';
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Obtiene lista de adscripciones permitidas para mostrar en combos/filtros
 * 
 * @param int $usuario_id
 * @param int $empresa_id
 * @return array Lista de adscripciones [{adscripcion_id, nombre, unidad_id, unidad_nombre}, ...]
 */
function get_adscripciones_permitidas($usuario_id, $empresa_id) {
    global $pdo;
    
    $alcance = get_usuario_alcance($usuario_id, $empresa_id);
    
    $sql = "SELECT a.adscripcion_id, a.nombre, a.unidad_id, u.nombre AS unidad_nombre
            FROM org_adscripciones a
            INNER JOIN org_unidades u ON u.unidad_id = a.unidad_id
            WHERE a.empresa_id = :empresa_id AND a.estatus = 1";
    $params = [':empresa_id' => (int)$empresa_id];
    
    $filtros = array();
    
    // Filtrar por unidades permitidas
    if (!empty($alcance['unidades'])) {
        $placeholders = array();
        foreach ($alcance['unidades'] as $idx => $uid) {
            $key = ':unidad_' . $idx;
            $placeholders[] = $key;
            $params[$key] = (int)$uid;
        }
        $filtros[] = 'a.unidad_id IN (' . implode(',', $placeholders) . ')';
    }
    
    // Filtrar por adscripciones permitidas
    if (!empty($alcance['adscripciones'])) {
        $placeholders = array();
        foreach ($alcance['adscripciones'] as $idx => $aid) {
            $key = ':adsc_' . $idx;
            $placeholders[] = $key;
            $params[$key] = (int)$aid;
        }
        $filtros[] = 'a.adscripcion_id IN (' . implode(',', $placeholders) . ')';
    }
    
    if (!empty($filtros)) {
        $sql .= ' AND (' . implode(' OR ', $filtros) . ')';
    }
    
    $sql .= ' ORDER BY u.nombre, a.nombre';
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
