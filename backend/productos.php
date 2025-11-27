<?php
require_once '../class/productos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? null;
    $categoria = $_POST['categoria'] ?? null;
    $precio = $_POST['precio'] ?? null;

    // Crear producto
    $producto = new Productos();
    $producto->setNombre($nombre);
    $producto->setCategoria($categoria);
    $producto->setPrecio($precio);

    if ($producto->guardar()) {
        echo "<script>alert('Producto guardado correctamente'); window.location.href='../views/home.html';</script>";
    } else {
        echo "<script>alert('Error al guardar el producto'); window.history.back();</script>";
    }
} else {
    include 'views/productos.html';
}
