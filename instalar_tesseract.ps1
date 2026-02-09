# Script de instalación de Tesseract OCR para SGRH
# PowerShell Script

Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "   INSTALADOR DE TESSERACT OCR - SGRH" -ForegroundColor Cyan
Write-Host "   Sistema de Captura Automática con IA" -ForegroundColor Cyan
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host ""

# Función para verificar Tesseract
function Test-TesseractInstalled {
    try {
        $version = & tesseract --version 2>&1
        return $true
    }
    catch {
        return $false
    }
}

# Verificar si ya está instalado
if (Test-TesseractInstalled) {
    Write-Host "[OK] Tesseract ya está instalado!" -ForegroundColor Green
    Write-Host ""
    & tesseract --version
    Write-Host ""
    Write-Host "Presione cualquier tecla para abrir el módulo de captura..." -ForegroundColor Yellow
    $null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
    Start-Process "http://localhost/sgrh/public/clima_captura_ia.php"
    exit 0
}

Write-Host "[INFO] Tesseract no detectado. Iniciando instalación..." -ForegroundColor Yellow
Write-Host ""

# Intentar descarga automática (opcional)
$downloadUrl = "https://digi.bib.uni-mannheim.de/tesseract/tesseract-ocr-w64-setup-5.3.1.20230401.exe"
$installerPath = "$env:TEMP\tesseract-installer.exe"

Write-Host "[OPCIÓN 1] Descarga Automática" -ForegroundColor Cyan
Write-Host ""
Write-Host "¿Desea descargar e instalar automáticamente? (S/N): " -NoNewline
$response = Read-Host

if ($response -eq 'S' -or $response -eq 's') {
    Write-Host ""
    Write-Host "Descargando Tesseract OCR..." -ForegroundColor Yellow
    
    try {
        # Descargar con barra de progreso
        $ProgressPreference = 'SilentlyContinue'
        Invoke-WebRequest -Uri $downloadUrl -OutFile $installerPath -UseBasicParsing
        $ProgressPreference = 'Continue'
        
        Write-Host "[OK] Descarga completada" -ForegroundColor Green
        Write-Host ""
        Write-Host "Ejecutando instalador..." -ForegroundColor Yellow
        Write-Host ""
        Write-Host "IMPORTANTE durante la instalación:" -ForegroundColor Red
        Write-Host "  - Seleccione 'Additional language data (download)'" -ForegroundColor Yellow
        Write-Host "  - Marque el idioma: Spanish (spa)" -ForegroundColor Yellow
        Write-Host ""
        
        Start-Process -FilePath $installerPath -Wait
        
    }
    catch {
        Write-Host "[ERROR] No se pudo descargar automáticamente" -ForegroundColor Red
        Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
        Write-Host ""
        Write-Host "Usando método manual..." -ForegroundColor Yellow
        Start-Process "https://github.com/UB-Mannheim/tesseract/wiki"
    }
}
else {
    Write-Host ""
    Write-Host "[OPCIÓN 2] Descarga Manual" -ForegroundColor Cyan
    Write-Host ""
    Write-Host "Abriendo página de descarga..." -ForegroundColor Yellow
    Write-Host ""
    Write-Host "Por favor:" -ForegroundColor White
    Write-Host "  1. Descargue: tesseract-ocr-w64-setup-v5.x.x.exe" -ForegroundColor White
    Write-Host "  2. Ejecute el instalador" -ForegroundColor White
    Write-Host "  3. IMPORTANTE: Seleccione idioma 'Spanish (spa)'" -ForegroundColor Yellow
    Write-Host "  4. Complete la instalación" -ForegroundColor White
    Write-Host "  5. Vuelva a este script" -ForegroundColor White
    Write-Host ""
    
    Start-Process "https://github.com/UB-Mannheim/tesseract/wiki"
    
    Write-Host "Presione cualquier tecla cuando haya completado la instalación..." -ForegroundColor Yellow
    $null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
}

# Verificar instalación
Write-Host ""
Write-Host "Verificando instalación..." -ForegroundColor Yellow
Write-Host ""

# Esperar un momento para que el PATH se actualice
Start-Sleep -Seconds 2

if (Test-TesseractInstalled) {
    Write-Host "[OK] Tesseract instalado correctamente!" -ForegroundColor Green
    Write-Host ""
    & tesseract --version
    Write-Host ""
    
    # Verificar idioma español
    $langs = & tesseract --list-langs 2>&1
    if ($langs -match "spa") {
        Write-Host "[OK] Idioma español configurado!" -ForegroundColor Green
        Write-Host ""
        Write-Host "============================================================" -ForegroundColor Green
        Write-Host "   INSTALACIÓN COMPLETADA EXITOSAMENTE" -ForegroundColor Green
        Write-Host "============================================================" -ForegroundColor Green
        Write-Host ""
        Write-Host "El sistema está listo para usar!" -ForegroundColor White
        Write-Host ""
        
        # Ejecutar test
        Write-Host "Ejecutando test de diagnóstico..." -ForegroundColor Yellow
        Write-Host ""
        
        $testScript = Join-Path $PSScriptRoot "test_tesseract_ocr.php"
        if (Test-Path $testScript) {
            & php $testScript
        }
        
        Write-Host ""
        Write-Host "Presione cualquier tecla para abrir el módulo..." -ForegroundColor Yellow
        $null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
        
        # Abrir módulo
        Start-Process "http://localhost/sgrh/public/clima_captura_ia.php"
        
    }
    else {
        Write-Host "[ERROR] Idioma español NO detectado" -ForegroundColor Red
        Write-Host ""
        Write-Host "ACCIÓN REQUERIDA:" -ForegroundColor Yellow
        Write-Host "  Reinstale Tesseract y seleccione 'Spanish (spa)'" -ForegroundColor White
        Write-Host ""
    }
}
else {
    Write-Host "[ERROR] Tesseract no fue instalado correctamente" -ForegroundColor Red
    Write-Host ""
    Write-Host "SOLUCIÓN:" -ForegroundColor Yellow
    Write-Host "  1. Verifique que la instalación se completó" -ForegroundColor White
    Write-Host "  2. Reinicie PowerShell o su computadora" -ForegroundColor White
    Write-Host "  3. Vuelva a ejecutar este script" -ForegroundColor White
    Write-Host ""
    Write-Host "O agregue manualmente al PATH:" -ForegroundColor Yellow
    Write-Host '  C:\Program Files\Tesseract-OCR' -ForegroundColor White
    Write-Host ""
}

Write-Host ""
Write-Host "Presione cualquier tecla para salir..." -ForegroundColor Yellow
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
