<?php
$result = contratos_generar_y_guardar(
    'resources/contratos/contrato_determinado.html',
    [
        'NOMBRE' => 'Juan Pérez',
        'NACIONALIDAD' => 'MEXICANA',
        'LUGAR_DE_NACIMIENTO' => 'CDMX',
        'F_NACIMIENTO' => '01/01/1990',
        'SEXO' => 'M',
        'RFC' => 'PEPJ900101XXX',
        'CURP' => 'PEPJ900101HDFRRN09',
        'NSS' => '12345678901',
        'DOMICILIO' => 'Calle 1 #2, Col. Centro, CDMX',
        'PUESTO' => 'Analista',
        'F_INICIO_1er_contrato' => '2026-02-01',
        'FTERMINO_3er_contrato' => '2026-05-01',
        'SUELDO' => '25,000.00',
        'LETRA' => 'VEINTICINCO MIL PESOS 00/100 M.N.',
        'APODERADO_LEGAL' => 'Nombre Apoderado'
    ],
    [
        'empresa_id' => 1,
        'empleado_id' => 123,
        'contrato_id' => 10,
        'tipo_documento' => 'contrato_temporal',
        'nombre_archivo' => 'contrato_temporal.pdf',
        'logo_path' => 'assets/images/logos/empresa1.png',
        'generado_por' => $_SESSION['usuario_id'] ?? null
    ]
);