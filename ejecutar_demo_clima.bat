@echo off
REM ==============================================================
REM Script para generar datos demo de Clima Laboral
REM Uso: ejecutar_demo_clima.bat
REM ==============================================================

REM Variables de configuración
set DB_HOST=localhost
set DB_USER=root
set DB_PASS=
set DB_NAME=sgrh

REM Opciones
if "%1%"=="" (
    echo.
    echo === Generador de Demo - Clima Laboral ===
    echo.
    echo Uso: ejecutar_demo_clima.bat [opcion]
    echo.
    echo Opciones:
    echo   clean     Limpiar datos existentes
    echo   generate  Generar nuevos datos
    echo   both      Limpiar y generar
    echo.
    goto :eof
)

echo.
echo === Generador de Demo - Clima Laboral ===
echo Conectando a BD: %DB_NAME%
echo.

REM Ejecutar script SQL
if "%1%"=="clean" (
    echo Limpiando datos...
    mysql -h %DB_HOST% -u %DB_USER% -p%DB_PASS% %DB_NAME% < generar_demo_clima.sql
) else if "%1%"=="generate" (
    echo Generando datos de demo...
    mysql -h %DB_HOST% -u %DB_USER% -p%DB_PASS% %DB_NAME% < generar_demo_clima.sql
) else if "%1%"=="both" (
    echo Limpiando y generando datos...
    mysql -h %DB_HOST% -u %DB_USER% -p%DB_PASS% %DB_NAME% < generar_demo_clima.sql
) else (
    echo Error: opcion no reconocida
    goto :eof
)

echo.
echo === Proceso completado ===
echo Visita: http://localhost/sgrh/public/clima_resultados_mi_unidad.php
echo.
pause
