@echo off
:: Script para instalar Ghostscript automáticamente
:: Este script debe ejecutarse como Administrador

echo ================================
echo  Instalador de Ghostscript
echo ================================
echo.

echo Ejecutando script de PowerShell...
echo.
echo IMPORTANTE: Si Windows pregunta, permite la ejecucion del script
echo.

powershell -ExecutionPolicy Bypass -File "%~dp0instalar_ghostscript.ps1"

pause
