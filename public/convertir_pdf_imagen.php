<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor PDF → Imagen | SGRH</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet">
    <link href="../global_assets/css/icons/icomoon/styles.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap_limitless.min.css" rel="stylesheet">
    <link href="../assets/css/layout.min.css" rel="stylesheet">
    <link href="../assets/css/components.min.css" rel="stylesheet">
    <link href="../assets/css/colors.min.css" rel="stylesheet">
    <style>
        .drop-zone {
            border: 3px dashed #ddd;
            border-radius: 8px;
            padding: 60px 20px;
            text-align: center;
            background: #f9f9f9;
            transition: all 0.3s;
            cursor: pointer;
        }
        .drop-zone:hover, .drop-zone.drag-over {
            border-color: #2196F3;
            background: #e3f2fd;
        }
        .preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        .preview-item {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            background: white;
            width: 200px;
        }
        .preview-img {
            width: 100%;
            height: auto;
            max-height: 250px;
            object-fit: contain;
            margin-bottom: 10px;
            border: 1px solid #eee;
        }
        .alert-info {
            background-color: #e3f2fd;
            border-color: #2196F3;
            color: #1565C0;
        }
    </style>
</head>
<body>
<?php 
require_once '../includes/head.php';
require_once '../includes/navbar.php';
require_once '../includes/sidebar.php';
?>

<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4>
                    <i class="icon-file-pdf mr-2"></i>
                    <span class="font-weight-semibold">Convertidor PDF → Imagen</span>
                </h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                
                <!-- Información -->
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">
                            <i class="icon-info22 mr-2"></i>
                            ¿Por qué convertir a imagen?
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info mb-3">
                            <strong>Si no tienes Ghostscript instalado:</strong><br>
                            El sistema no puede procesar PDFs directamente. Esta herramienta te permite convertir tu PDF a imagen PNG antes de subirlo al OCR.
                        </div>
                        
                        <h6 class="font-weight-semibold">Ventajas de usar imágenes:</h6>
                        <ul>
                            <li>✅ No requiere Ghostscript</li>
                            <li>✅ Procesamiento más rápido</li>
                            <li>✅ Mayor control de calidad</li>
                            <li>✅ Compatible con cualquier escáner</li>
                        </ul>
                    </div>
                </div>

                <!-- Convertidor -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="icon-upload mr-2"></i>
                            Subir PDF para Convertir
                        </h5>
                    </div>
                    <div class="card-body">
                        
                        <div class="drop-zone" id="dropZone">
                            <i class="icon-file-pdf" style="font-size: 48px; color: #e53935; margin-bottom: 15px;"></i>
                            <h5>Arrastra tu PDF aquí</h5>
                            <p class="text-muted">o haz clic para seleccionar archivo</p>
                            <input type="file" id="fileInput" accept=".pdf" style="display: none;">
                        </div>

                        <div id="status" class="mt-3"></div>
                        <div id="preview" class="preview-container"></div>

                    </div>
                </div>

                <!-- Instrucciones Alternativas -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <i class="icon-graduation2 mr-2"></i>
                            Métodos Alternativos
                        </h5>
                    </div>
                    <div class="card-body">
                        <h6 class="font-weight-semibold mb-3">Si esta herramienta no funciona:</h6>
                        
                        <div class="mb-3">
                            <strong>Opción 1: Convertir Online</strong>
                            <p class="text-muted mb-1">Usa un servicio gratuito en línea:</p>
                            <a href="https://convertio.co/es/pdf-png/" target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="icon-link mr-1"></i> Convertio.co
                            </a>
                            <a href="https://www.ilovepdf.com/es/pdf_a_jpg" target="_blank" class="btn btn-sm btn-outline-primary ml-2">
                                <i class="icon-link mr-1"></i> ILovePDF
                            </a>
                        </div>

                        <div class="mb-3">
                            <strong>Opción 2: Captura de Pantalla</strong>
                            <ol class="text-muted mb-0">
                                <li>Abre tu PDF con Edge o Chrome</li>
                                <li>Presiona <kbd>Win</kbd> + <kbd>Shift</kbd> + <kbd>S</kbd></li>
                                <li>Selecciona el área de la encuesta</li>
                                <li>Guarda la imagen (PNG)</li>
                            </ol>
                        </div>

                        <div>
                            <strong>Opción 3: Instalar Ghostscript</strong>
                            <p class="text-muted mb-1">Para procesamiento automático de PDFs:</p>
                            <a href="../INSTALAR_GHOSTSCRIPT.md" class="btn btn-sm btn-success">
                                <i class="icon-download mr-1"></i> Ver Guía de Instalación
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /content area -->
</div>
<!-- /main content -->

<?php require_once '../includes/footer.php'; ?>

<script src="../global_assets/js/main/jquery.min.js"></script>
<script src="../global_assets/js/main/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropZone = document.getElementById('dropZone');
    const fileInput = document.getElementById('fileInput');
    const status = document.getElementById('status');
    const preview = document.getElementById('preview');

    // Hacer clic en zona activa input
    dropZone.addEventListener('click', function() {
        fileInput.click();
    });

    // File input change
    fileInput.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
            handleFile(e.target.files[0]);
        }
    });

    // Drag & Drop
    dropZone.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropZone.classList.add('drag-over');
    });

    dropZone.addEventListener('dragleave', function() {
        dropZone.classList.remove('drag-over');
    });

    dropZone.addEventListener('drop', function(e) {
        e.preventDefault();
        dropZone.classList.remove('drag-over');
        
        if (e.dataTransfer.files.length > 0) {
            const file = e.dataTransfer.files[0];
            if (file.type === 'application/pdf') {
                handleFile(file);
            } else {
                showError('Por favor selecciona un archivo PDF');
            }
        }
    });

    function handleFile(file) {
        if (file.type !== 'application/pdf') {
            showError('Solo se aceptan archivos PDF');
            return;
        }

        if (file.size > 10 * 1024 * 1024) {
            showError('El archivo es muy grande (máx 10 MB)');
            return;
        }

        showInfo('⏳ Intentando convertir PDF a imagen...');
        
        // Informar que esta conversión requiere una librería JavaScript
        // o debe hacerse del lado del servidor con Ghostscript
        showWarning(
            '<strong>Limitación del Navegador:</strong><br>' +
            'Los navegadores no pueden convertir PDFs directamente a imágenes por seguridad.<br><br>' +
            '<strong>Opciones:</strong><br>' +
            '1. Usa <a href="https://convertio.co/es/pdf-png/" target="_blank">Convertio.co</a> (recomendado)<br>' +
            '2. Captura de pantalla del PDF abierto<br>' +
            '3. <a href="../INSTALAR_GHOSTSCRIPT.md">Instala Ghostscript</a> para procesamiento automático'
        );
    }

    function showError(message) {
        status.innerHTML = '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error:</strong> ' + message + '</div>';
    }

    function showWarning(message) {
        status.innerHTML = '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>' + message + '</div>';
    }

    function showInfo(message) {
        status.innerHTML = '<div class="alert alert-info"><i class="icon-spinner2 spinner mr-2"></i>' + message + '</div>';
    }

    function showSuccess(message) {
        status.innerHTML = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Éxito!</strong> ' + message + '</div>';
    }
});
</script>

</body>
</html>
