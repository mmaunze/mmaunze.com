<?php
/**
 * Configuração de URLs
 */

// URL base do projecto (preferencialmente do .env)
define('BASE_URL', env('APP_URL', 'https://mmaunze.com'));

/**
 * Retorna URL absoluta para o ficheiro/página fornecida
 * @param string $path Caminho relativo à raiz (ex: 'pages/sobre')
 * @return string
 */
function url($path = '') {
    // Remove barras duplicadas
    $path = trim($path, '/');
    return BASE_URL . '/' . $path;
}
