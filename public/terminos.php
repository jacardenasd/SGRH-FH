<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Términos y Condiciones | SGRH';
include __DIR__ . '/../includes/layout/head.php';
?>

<style>
  .page-content {
    display: flex;
    flex-direction: column;
  }
  .content-wrapper {
    flex: 1;
    overflow-y: auto;
  }
  .terms-container {
    max-width: 900px;
    margin: 40px auto;
    padding: 30px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }
  .terms-header {
    border-bottom: 3px solid #0f7672;
    padding-bottom: 20px;
    margin-bottom: 30px;
  }
  .terms-header h1 {
    color: #0f7672;
    margin-bottom: 5px;
  }
  .terms-header p {
    color: #999;
    font-size: 0.95rem;
  }
  .terms-section {
    margin-bottom: 25px;
  }
  .terms-section h2 {
    color: #0f7672;
    font-size: 1.3rem;
    margin-bottom: 12px;
    margin-top: 20px;
  }
  .terms-section p {
    line-height: 1.7;
    color: #555;
    margin-bottom: 12px;
  }
  .terms-section ul {
    margin-left: 20px;
    margin-bottom: 12px;
  }
  .terms-section li {
    line-height: 1.7;
    color: #555;
    margin-bottom: 8px;
  }
  .terms-footer {
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #e0e0e0;
    display: flex;
    gap: 10px;
    justify-content: center;
  }
</style>

<div class="page-content">
  <div class="content-wrapper">
    <div class="terms-container">
      
      <div class="terms-header">
        <h1>Términos y Condiciones</h1>
        <p>Sistema de Gestión de Recursos Humanos (SGRH) - Última actualización: enero de 2026</p>
      </div>

      <div class="terms-section">
        <h2>1. Aceptación de Términos</h2>
        <p>
          Al acceder y utilizar el Sistema de Gestión de Recursos Humanos (SGRH), usted reconoce que ha leído, entendido 
          y acepta estar vinculado por estos términos y condiciones. Si no acepta alguno de estos términos, le recomendamos 
          que no utilice el sistema.
        </p>
      </div>

      <div class="terms-section">
        <h2>2. Descripción del Servicio</h2>
        <p>
          El SGRH es una plataforma digital diseñada para la gestión integral de recursos humanos, incluyendo (pero no limitado a):
        </p>
        <ul>
          <li>Administración de empleados y nómina</li>
          <li>Gestión de contratos laborales</li>
          <li>Encuestas de clima organizacional</li>
          <li>Documentación y registros laborales</li>
          <li>Control de acceso y autenticación de usuarios</li>
        </ul>
      </div>

      <div class="terms-section">
        <h2>3. Requisitos de Acceso</h2>
        <p>
          Para acceder al SGRH, usted debe:
        </p>
        <ul>
          <li>Contar con credenciales válidas proporcionadas por su empresa</li>
          <li>Ser un empleado activo o autorizado de la organización</li>
          <li>Cumplir con las políticas de seguridad establecidas por la empresa</li>
          <li>Mantener la confidencialidad de sus credenciales de acceso</li>
        </ul>
      </p>
      </div>

      <div class="terms-section">
        <h2>4. Confidencialidad y Protección de Datos</h2>
        <p>
          Usted se compromete a mantener la confidencialidad de toda la información a la que acceda a través del SGRH. 
          La información contenida en el sistema es propiedad de la empresa y está protegida por leyes de confidencialidad 
          y protección de datos aplicables.
        </p>
        <p>
          Los datos personales se procesarán de conformidad con las leyes de protección de datos vigentes en la jurisdicción 
          correspondiente y la política de privacidad de la empresa.
        </p>
      </div>

      <div class="terms-section">
        <h2>5. Prohibiciones de Uso</h2>
        <p>
          Usted se compromete a NO:
        </p>
        <ul>
          <li>Acceder a información no autorizada o de otros usuarios</li>
          <li>Modificar, copiar, distribuir o compartir datos del sistema sin autorización</li>
          <li>Intentar eludir mecanismos de seguridad o autenticación</li>
          <li>Utilizar el sistema para propósitos ilegales o no autorizados</li>
          <li>Sobrecargar o interferir con el funcionamiento normal del sistema</li>
          <li>Revelar credenciales a terceros o permitir el acceso no autorizado</li>
        </ul>
      </div>

      <div class="terms-section">
        <h2>6. Responsabilidades del Usuario</h2>
        <p>
          Como usuario del SGRH, usted es responsable por:
        </p>
        <ul>
          <li>Proporcionar información precisa y actualizada</li>
          <li>Reportar inmediatamente cualquier acceso no autorizado a su cuenta</li>
          <li>Cumplir con todas las políticas corporativas y regulaciones aplicables</li>
          <li>Usar el sistema únicamente para propósitos autorizados por la empresa</li>
          <li>Mantener el confidencial de la información sensible accedida</li>
        </ul>
      </div>

      <div class="terms-section">
        <h2>7. Desconexión Automática</h2>
        <p>
          Por razones de seguridad, las sesiones de usuario se cerrarán automáticamente después de un período de inactividad 
          definido por la empresa. El usuario será responsable de volver a autenticarse para continuar usando el sistema.
        </p>
      </div>

      <div class="terms-section">
        <h2>8. Disponibilidad y Mantenimiento</h2>
        <p>
          La empresa se esfuerza por mantener el SGRH disponible las 24 horas del día. Sin embargo, la empresa no garantiza 
          disponibilidad ininterrumpida y se reserva el derecho de realizar mantenimiento, actualizaciones o pausas del 
          servicio sin previo aviso cuando sea necesario.
        </p>
      </div>

      <div class="terms-section">
        <h2>9. Limitación de Responsabilidad</h2>
        <p>
          En la medida permitida por la ley, la empresa no será responsable por daños indirectos, incidentales, especiales o 
          consecuentes derivados del uso o la imposibilidad de usar el SGRH, incluso si se ha advertido de la posibilidad de 
          tales daños.
        </p>
      </div>

      <div class="terms-section">
        <h2>10. Cambios a los Términos</h2>
        <p>
          La empresa se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Los cambios 
          entrarán en vigor inmediatamente después de su publicación en el sistema. El uso continuo del SGRH después de 
          cambios constituye su aceptación de los nuevos términos.
        </p>
      </div>

      <div class="terms-section">
        <h2>11. Terminación de Acceso</h2>
        <p>
          La empresa puede suspender o revocar el acceso al SGRH en cualquier momento, especialmente en caso de violación 
          de estos términos, políticas corporativas o leyes aplicables. La terminación no afecta la responsabilidad del 
          usuario por acciones realizadas antes de la suspensión.
        </p>
      </div>

      <div class="terms-section">
        <h2>12. Ley Aplicable</h2>
        <p>
          Estos términos y condiciones están sujetos a las leyes de la jurisdicción en la que se encuentra constituida la empresa, 
          sin considerar sus conflictos de disposiciones legales.
        </p>
      </div>

      <div class="terms-section">
        <h2>13. Contacto</h2>
        <p>
          Si tiene preguntas sobre estos términos y condiciones, póngase en contacto con el departamento de Recursos Humanos 
          o el administrador del sistema SGRH.
        </p>
      </div>

      <div class="terms-footer">
        <a href="login.php" class="btn btn-primary">Volver al Login</a>
        <a href="index.php" class="btn btn-secondary">Volver al Sistema</a>
      </div>

    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/layout/footer.php'; ?>
