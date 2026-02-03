<?php
/**
 * Bootstrap global do projecto
 * Define raiz, carrega variáveis de ambiente e configurações
 */

// Caminho absoluto da raiz do projecto
define('ROOT_PATH', realpath(__DIR__ . '/..'));

// Caminho para includes e config
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('CONFIG_PATH', ROOT_PATH . '/config');

// 1. Carregar o carregador de .env e a função env()
require_once CONFIG_PATH . '/env-loader.php';

// 2. Carregar variáveis do ficheiro .env
load_env(ROOT_PATH . '/.env');

// 3. Definir modo de debug
define('APP_DEBUG', env('APP_DEBUG', false));

// 4. Carregar configurações dependentes do .env
require_once CONFIG_PATH . '/db-config.php';
require_once CONFIG_PATH . '/mail-config.php';
require_once CONFIG_PATH . '/url-config.php';

/**
 * Autoload simples de partes (templates/includes)
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
