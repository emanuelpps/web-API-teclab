<?php
// index.php: incluye/lee index.html en el mismo directorio
$indexFile = __DIR__ . '/views/home.html';

if (is_readable($indexFile)) {
    header('Content-Type: text/html; charset=utf-8');
    readfile($indexFile);
    exit;
}

// Si no existe, devolver 404 simple
http_response_code(404);
echo '<!doctype html><html><head><meta charset="utf-8"><title>404</title></head><body><h1>404 - index.html no encontrado</h1></body></html>';
?>