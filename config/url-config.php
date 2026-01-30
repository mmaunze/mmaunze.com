<?php
// config/config.php

// URL base do projecto
define('BASE_URL', 'http://localhost:5500'); // muda para o teu domínio real

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
?>