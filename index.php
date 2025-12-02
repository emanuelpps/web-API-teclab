<?php
// Redirigir al home
if (!isset($_POST['action'])) {
    header("Location: views/home.html");
    exit();
}
require_once 'class/autoload.php';
$productos = new Productos();
$listado = $productos->listarConCategorias();
if (isset($_POST['action']) && $_POST['action'] === 'listarHome') {
    foreach ($listado as $prod) {
        echo "
<div class='col-12 col-sm-6 col-md-4 col-lg-3'>
    <div class='product-card'>
        <h5><strong>{$prod['nombre']}</strong></h5>
        <p class='text-muted'>{$prod['categoria']}</p>
        <p><strong>$ {$prod['precio']}</strong></p>
    </div>
</div>";
    }
    exit;
}
?>