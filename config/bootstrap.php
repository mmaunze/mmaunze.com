<?php
/**
 * Bootstrap global do projecto
 * Define raiz, carrega ambiente e helpers comuns
 */

// Caminho absoluto da raiz do projecto
define('ROOT_PATH', realpath(__DIR__ . '/..'));

// Autoload do Composer (inclui phpdotenv e phpmailer)
require_once ROOT_PATH . '/vendor/autoload.php';

// Carrega variáveis de ambiente do .env
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

// Valida variáveis obrigatórias
$dotenv->required([
    'DB_HOST',
    'DB_NAME',
    'DB_USER',
    'DB_PASS',
    'SMTP_HOST',
    'SMTP_USER',
    'SMTP_PASS'
])->notEmpty();

// Define caminhos do projecto
define('CONFIG_PATH', ROOT_PATH . '/config');
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('ASSETS_PATH', ROOT_PATH . '/assets');
define('UPLOADS_PATH', ROOT_PATH . '/uploads');

// Define constantes de ambiente
define('APP_ENV', $_ENV['APP_ENV'] ?? 'production');
define('APP_DEBUG', filter_var($_ENV['APP_DEBUG'] ?? false, FILTER_VALIDATE_BOOLEAN));
define('APP_URL', $_ENV['APP_URL'] ?? '');

// Configuração de erros baseada no ambiente
if (APP_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    ini_set('error_log', ROOT_PATH . '/logs/php-errors.log');
}

// Carrega configurações específicas
require_once CONFIG_PATH . '/db-config.php';
require_once CONFIG_PATH . '/mail-config.php';

/**
 * Autoload simples de partes/includes
 */
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

/**
 * Helper para URLs de assets
 */
function asset(string $path): string
{
    return APP_URL . '/assets/' . ltrim($path, '/');
}

/**
 * Helper para obter variáveis de ambiente
 */
function env(string $key, $default = null)
{
    return $_ENV[$key] ?? $default;
}
