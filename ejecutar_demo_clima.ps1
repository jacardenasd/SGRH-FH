# Script para generar datos demo de Clima Laboral
# Uso: .\ejecutar_demo_clima.ps1 -Action generate

param(
    [ValidateSet('clean', 'generate', 'both')]
    [string]$Action = 'generate',
    
    [string]$DbHost = 'localhost',
    [string]$DbUser = 'root',
    [string]$DbPass = '',
    [string]$DbName = 'sgrh',
    [string]$SqlFile = 'generar_demo_clima.sql'
)

# Colores
$colors = @{
    Success = 'Green'
    Error   = 'Red'
    Info    = 'Cyan'
    Warning = 'Yellow'
}

# Función para imprimir con color
function Write-ColorOutput {
    param(
        [string]$Message,
        [string]$Type = 'Info'
    )
    Write-Host $Message -ForegroundColor $colors[$Type]
}

# Banner
Write-ColorOutput "`n=== Generador de Demo - Clima Laboral ===" 'Info'
Write-Host "Acción: $Action"
Write-Host "Base de datos: $DbName@$DbHost"
Write-Host "Usuario: $DbUser"
Write-Host ""

# Validar que el archivo SQL existe
if (-not (Test-Path $SqlFile)) {
    Write-ColorOutput "❌ Error: No se encontró el archivo $SqlFile" 'Error'
    exit 1
}

# Construir comando de conexión
$connection = "mysql -h$DbHost -u$DbUser"
if ($DbPass) {
    $connection += " -p`"$DbPass`""
}
$connection += " $DbName"

try {
    # Verificar conexión
    Write-ColorOutput "🔍 Verificando conexión a la base de datos..." 'Info'
    $testCmd = "mysql -h$DbHost -u$DbUser"
    if ($DbPass) {
        $testCmd += " -p`"$DbPass`""
    }
    $testCmd += " -e `"SELECT 1;`""
    
    Invoke-Expression $testCmd 2>&1 | Out-Null
    
    if ($LASTEXITCODE -eq 0) {
        Write-ColorOutput "✅ Conexión exitosa" 'Success'
    } else {
        throw "No se pudo conectar a la base de datos"
    }
    
    # Ejecutar script SQL
    Write-ColorOutput "`n📊 Ejecutando script $SqlFile..." 'Info'
    Write-Host ""
    
    $cmd = "$connection < $SqlFile"
    Invoke-Expression $cmd
    
    if ($LASTEXITCODE -eq 0) {
        Write-ColorOutput "`n✅ Proceso completado exitosamente" 'Success'
        Write-ColorOutput "`n📍 Próximos pasos:" 'Info'
        Write-Host "   1. Abre tu navegador en: http://localhost/sgrh/public/clima_resultados_mi_unidad.php"
        Write-Host "   2. Deberías ver gráficas con datos de clima laboral"
        Write-Host "   3. Verifica los promedios por superdimensión"
    } else {
        Write-ColorOutput "❌ Error al ejecutar el script SQL" 'Error'
        exit 1
    }
    
} catch {
    Write-ColorOutput "❌ Error: $_" 'Error'
    exit 1
}

Write-Host ""
