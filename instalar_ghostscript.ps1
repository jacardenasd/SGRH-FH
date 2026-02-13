# Script para descargar e instalar Ghostscript automaticamente
# Ejecutar en PowerShell como Administrador

Write-Host "================================" -ForegroundColor Cyan
Write-Host " Instalador de Ghostscript" -ForegroundColor Cyan
Write-Host "================================" -ForegroundColor Cyan
Write-Host ""

# Verificar si ya esta instalado
Write-Host "Verificando si Ghostscript ya esta instalado..." -ForegroundColor Yellow

$gsPath = $null
$gsVersions = @("10.02.1", "10.02.0", "10.01.2", "9.56.1", "10.03.0", "10.03.1")

foreach ($version in $gsVersions) {
    $path64 = "C:\Program Files\gs\gs$version\bin\gswin64c.exe"
    $path32 = "C:\Program Files (x86)\gs\gs$version\bin\gswin32c.exe"
    
    if (Test-Path $path64) {
        $gsPath = $path64
        break
    }
    if (Test-Path $path32) {
        $gsPath = $path32
        break
    }
}

if ($gsPath) {
    Write-Host "OK Ghostscript YA ESTA INSTALADO: $gsPath" -ForegroundColor Green
    Write-Host ""
    Write-Host "Puedes cerrar esta ventana y reiniciar MAMP." -ForegroundColor Green
    Write-Host ""
    Read-Host "Presiona Enter para salir"
    exit
}

Write-Host "X Ghostscript NO esta instalado. Iniciando descarga..." -ForegroundColor Red
Write-Host ""

# URL de descarga (version mas reciente)
$url = "https://github.com/ArtifexSoftware/ghostpdl-downloads/releases/download/gs10021/gs10.02.1w64.exe"
$output = "$env:TEMP\ghostscript_installer.exe"

Write-Host "Descargando Ghostscript desde GitHub..." -ForegroundColor Yellow
Write-Host "URL: $url" -ForegroundColor Gray
Write-Host "Guardando en: $output" -ForegroundColor Gray
Write-Host ""

try {
    # Descargar instalador
    $webClient = New-Object System.Net.WebClient
    $webClient.DownloadFile($url, $output)
    
    Write-Host "OK Descarga completada!" -ForegroundColor Green
    Write-Host ""
    
    # Ejecutar instalador
    Write-Host "Iniciando instalador de Ghostscript..." -ForegroundColor Yellow
    Write-Host "IMPORTANTE: Usa la ruta de instalacion por defecto" -ForegroundColor Cyan
    Write-Host "             C:\Program Files\gs\gs10.02.1\" -ForegroundColor Cyan
    Write-Host ""
    
    Start-Process -FilePath $output -Wait
    
    Write-Host ""
    Write-Host "================================" -ForegroundColor Cyan
    Write-Host " Instalacion Completada" -ForegroundColor Cyan
    Write-Host "================================" -ForegroundColor Cyan
    Write-Host ""
    
    # Verificar instalacion
    $gsTestPath = "C:\Program Files\gs\gs10.02.1\bin\gswin64c.exe"
    if (Test-Path $gsTestPath) {
        Write-Host "OK Ghostscript instalado correctamente!" -ForegroundColor Green
        Write-Host "  Ruta: $gsTestPath" -ForegroundColor Green
        Write-Host ""
        Write-Host "SIGUIENTE PASO:" -ForegroundColor Yellow
        Write-Host "1. Reinicia MAMP completamente (deten y vuelve a abrir)" -ForegroundColor Cyan
        Write-Host "2. Vuelve a intentar cargar tu PDF en el sistema OCR" -ForegroundColor Cyan
    } else {
        Write-Host "ADVERTENCIA: No se pudo verificar la instalacion" -ForegroundColor Yellow
        Write-Host "  Verifica manualmente que Ghostscript este en:" -ForegroundColor Yellow
        Write-Host "  C:\Program Files\gs\gs10.02.1\bin\gswin64c.exe" -ForegroundColor Yellow
    }
    
    # Limpiar instalador
    Remove-Item $output -ErrorAction SilentlyContinue
    
} catch {
    Write-Host "X ERROR durante la descarga o instalacion:" -ForegroundColor Red
    Write-Host $_.Exception.Message -ForegroundColor Red
    Write-Host ""
    Write-Host "ALTERNATIVA: Descarga manualmente desde:" -ForegroundColor Yellow
    Write-Host "https://ghostscript.com/releases/gsdnld.html" -ForegroundColor Cyan
}

Write-Host ""
Read-Host "Presiona Enter para salir"
