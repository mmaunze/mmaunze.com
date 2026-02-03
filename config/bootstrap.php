<?php
/**
 * Bootstrap global do projecto
 * Define raiz e helpers comuns
 */

// Caminho absoluto da raiz do projecto
define('ROOT_PATH', realpath(__DIR__ . '/..'));

// Caminho para includes
define('INCLUDES_PATH', ROOT_PATH . '/includes');

// Autoload simples de partes
function get_part(string $part): void
{
    $file = INCLUDES_PATH . '/' . $part . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        trigger_error(
            "Parte '{$part}' não encontrada em {$file}",
            E_USER_WARNING
        );
    }
}


// <?php
// /**
//  * Bootstrap global do projecto
//  */

// // ==== FILESYSTEM PATHS (PHP) ====
// define('ROOT_PATH', realpath(__DIR__ . '/..'));
// define('CONFIG_PATH', ROOT_PATH . '/config');
// define('INCLUDES_PATH', ROOT_PATH . '/includes');
// define('ASSETS_PATH', ROOT_PATH . '/assets');
// define('UPLOADS_PATH', ROOT_PATH . '/uploads');

// // ==== BASE URL (BROWSER) ====
// // Detecta automaticamente (Hostinger, Apache, subpastas, etc.)
// $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
// $host = $_SERVER['HTTP_HOST'];
// $scriptDir = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);

// define('BASE_URL', $protocol . '://' . $host . $scriptDir);

// // ==== Helpers ====

// // PHP includes
// function get_part(string $file): void
// {
//     $path = INCLUDES_PATH . '/' . $file . '.php';
//     if (!file_exists($path)) {
//         throw new RuntimeException("Include não encontrado: {$path}");
//     }
//     require $path;
// }

// // URLs públicas (CSS, JS, imagens)
// function asset(string $path): string
// {
//     return BASE_URL . '/assets/' . ltrim($path, '/');
// }
