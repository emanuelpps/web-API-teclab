<?php
// categorias.php
// Importa y muestra la view de categorías. Ajusta las rutas según tu estructura de carpetas.

// Rutas posibles donde puede estar la view
$possibleViews = [
    __DIR__ . '/views/categorias.html',
    __DIR__ . '/views/productos.html'
];

$view = null;
foreach ($possibleViews as $p) {
    if (file_exists($p)) { $view = $p; break; }
}

// Si necesitas cargar un modelo antes de la vista, descomenta y ajusta las rutas.
// if (file_exists(__DIR__ . '/models/Categoria.php')) {
//     require_once __DIR__ . '/models/Categoria.php';
//     // ejemplo: $categorias = Categoria::getAll();
// } else {
//     $categorias = [];
// }

if (!$view) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo 'Vista de categorías no encontrada.';
    exit;
}

// Incluir la vista encontrada
require_once $view;