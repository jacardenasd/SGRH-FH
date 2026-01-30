// includes/datatables_es.php
// Configuración de idioma español para DataTables
// Incluir este fragmento en el script de inicialización de DataTables

$datatables_es_config = [
    'language' => [
        'search' => 'Buscar:',
        'lengthMenu' => 'Mostrar _MENU_ registros',
        'info' => 'Mostrando _START_ a _END_ de _TOTAL_ registros',
        'infoEmpty' => 'Mostrando 0 a 0 de 0 registros',
        'infoFiltered' => '(filtrado de _MAX_ registros totales)',
        'loadingRecords' => 'Cargando...',
        'processing' => 'Procesando...',
        'zeroRecords' => 'No se encontraron registros',
        'emptyTable' => 'No hay datos disponibles',
        'paginate' => [
            'first' => 'Primero',
            'previous' => 'Anterior',
            'next' => 'Siguiente',
            'last' => 'Último'
        ]
    ]
];

/* JavaScript inline para usar en scripts:
language: {
    search: 'Buscar:',
    lengthMenu: 'Mostrar _MENU_ registros',
    info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
    infoEmpty: 'Mostrando 0 a 0 de 0 registros',
    infoFiltered: '(filtrado de _MAX_ registros totales)',
    loadingRecords: 'Cargando...',
    processing: 'Procesando...',
    zeroRecords: 'No se encontraron registros',
    emptyTable: 'No hay datos disponibles',
    paginate: {
        first: 'Primero',
        previous: 'Anterior',
        next: 'Siguiente',
        last: 'Último'
    }
}
*/
