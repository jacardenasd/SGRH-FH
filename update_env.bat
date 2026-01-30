@echo off
REM ============================================
REM Script para asegurar el archivo .env
REM ============================================
REM USO: update_env.bat
REM Este script actualiza las credenciales en .env

setlocal enabledelayedexpansion

echo.
echo ================================
echo ACTUALIZAR CREDENCIALES .env
echo ================================
echo.

REM Verificar que .env existe
if not exist ".env" (
    echo [ERROR] No se encontro .env
    echo Copia .env.example a .env primero
    pause
    exit /b 1
)

echo [1/3] Cambiando APP_ENV a 'prod'...
powershell -Command "(Get-Content .env) -replace '^APP_ENV=.*', 'APP_ENV=prod' | Set-Content .env"
echo [OK] APP_ENV = prod
echo.

echo [2/3] Cambiando APP_DEBUG a 'false'...
powershell -Command "(Get-Content .env) -replace '^APP_DEBUG=.*', 'APP_DEBUG=false' | Set-Content .env"
echo [OK] APP_DEBUG = false
echo.

echo [3/3] Verificando .gitignore...
findstr /r "^\.env$" .gitignore >nul 2>&1
if errorlevel 1 (
    echo [WARN] .env no esta en .gitignore
    echo. >> .gitignore
    echo .env >> .gitignore
    echo [OK] .env agregado a .gitignore
) else (
    echo [OK] .env ya esta en .gitignore
)
echo.

echo ================================
echo ACCIONES REQUERIDAS MANUALMENTE:
echo ================================
echo.

echo [1] CREDENCIALES DE BASE DE DATOS:
echo     - Abre INSTRUCCIONES_BD_SEGURA.sql
echo     - Ejecuta los comandos en MySQL
echo     - Luego edita .env:
echo       DB_USER=sgrh_app
echo       DB_PASS=TuContraseñaSegura123!@#
echo.

echo [2] CREDENCIAL SMTP:
echo     - Accede a GoDaddy
echo     - Cambia contraseña o genera token
echo     - Edita .env:
echo       SMTP_PASSWORD=NuevaContraseña
echo.

echo [3] VERIFICAR CAMBIOS:
echo     - Abre .env y verifica:
echo       - APP_ENV=prod
echo       - APP_DEBUG=false
echo       - DB_USER=sgrh_app (con nueva password)
echo       - SMTP_PASSWORD=nueva
echo.

echo ================================
echo [OK] Script finalizado
echo [OK] .env esta marcado para ser ignorado en git
echo ================================
echo.

echo Presiona cualquier tecla para continuar...
pause >nul
