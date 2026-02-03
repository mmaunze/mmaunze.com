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

