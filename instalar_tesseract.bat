@echo off
REM Script de instalación de Tesseract OCR para SGRH
REM Windows Batch Script

echo ============================================================
echo    INSTALADOR DE TESSERACT OCR - SGRH
echo    Sistema de Captura Automatica con IA
echo ============================================================
echo.

REM Verificar si Tesseract ya está instalado
where tesseract >nul 2>&1
if %errorlevel% equ 0 (
    echo [OK] Tesseract ya esta instalado!
    echo.
    tesseract --version
    echo.
    echo Presione cualquier tecla para abrir el modulo de captura...
    pause >nul
    start http://localhost/sgrh/public/clima_captura_ia.php
    exit /b 0
)

echo [INFO] Tesseract no detectado. Iniciando instalacion...
echo.

REM Verificar si el instalador ya fue descargado
if exist "%TEMP%\tesseract-installer.exe" (
    echo [OK] Instalador encontrado en cache
    echo.
    echo Ejecutando instalador...
    start /wait "%TEMP%\tesseract-installer.exe"
    goto :verify
)

echo [PASO 1] Abriendo pagina de descarga...
echo.
echo Por favor:
echo   1. Descargue el archivo: tesseract-ocr-w64-setup-v5.x.x.exe
echo   2. Ejecute el instalador
echo   3. IMPORTANTE: Seleccione idioma "Spanish (spa)"
echo   4. Complete la instalacion
echo   5. Vuelva a ejecutar este script
echo.

REM Abrir página de descarga
start https://github.com/UB-Mannheim/tesseract/wiki

echo Presione cualquier tecla cuando haya completado la instalacion...
pause >nul

:verify
echo.
echo [PASO 2] Verificando instalacion...
echo.

REM Verificar nuevamente
where tesseract >nul 2>&1
if %errorlevel% equ 0 (
    echo [OK] Tesseract instalado correctamente!
    echo.
    tesseract --version
    echo.
    
    REM Verificar idioma español
    tesseract --list-langs | findstr /C:"spa" >nul 2>&1
    if %errorlevel% equ 0 (
        echo [OK] Idioma espanol configurado!
        echo.
        echo ============================================================
        echo    INSTALACION COMPLETADA EXITOSAMENTE
        echo ============================================================
        echo.
        echo El sistema esta listo para usar!
        echo.
        echo Presione cualquier tecla para:
        echo   1. Ejecutar test de diagnostico
        echo   2. Abrir modulo de captura
        echo.
        pause >nul
        
        REM Ejecutar test
        echo Ejecutando test de diagnostico...
        echo.
        php "%~dp0test_tesseract_ocr.php"
        echo.
        echo Presione cualquier tecla para abrir el modulo...
        pause >nul
        
        REM Abrir módulo
        start http://localhost/sgrh/public/clima_captura_ia.php
        
    ) else (
        echo [ERROR] Idioma espanol NO detectado
        echo.
        echo ACCION REQUERIDA:
        echo   Reinstale Tesseract y seleccione "Spanish (spa)"
        echo.
    )
) else (
    echo [ERROR] Tesseract no fue instalado correctamente
    echo.
    echo SOLUCION:
    echo   1. Verifique que la instalacion se completo
    echo   2. Reinicie su computadora
    echo   3. Vuelva a ejecutar este script
    echo.
)

echo.
echo Presione cualquier tecla para salir...
pause >nul
