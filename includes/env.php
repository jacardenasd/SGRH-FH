<?php
// Simple .env loader: tolerates cualquier carácter (incluye !, @, espacios) y no depende de parse_ini_file.
// Formato: KEY=valor (sin secciones). Líneas vacías o que empiezan con # se ignoran.
// No sobrescribe variables ya presentes en el entorno.
if (!function_exists('load_env_file')) {
    function load_env_file(string $path): void {
        static $loaded = false;
        if ($loaded) {
            return;
        }
        if (!is_file($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines === false) {
            return;
        }

        foreach ($lines as $line) {
            $trim = ltrim($line);
            if ($trim === '' || $trim[0] === '#') {
                continue;
            }
            if (!str_contains($line, '=')) {
                continue;
            }
            [$key, $val] = explode('=', $line, 2);
            $key = trim($key);
            if ($key === '' || getenv($key) !== false) {
                continue; // no sobrescribir
            }
            // Quitar comillas envolventes si existen
            $val = trim($val);
            $val = trim($val, "\"'\r\n");

            putenv($key . '=' . $val);
            $_ENV[$key] = $val;
            $_SERVER[$key] = $val;
        }

        $loaded = true;
    }
}

load_env_file(__DIR__ . '/../.env');
