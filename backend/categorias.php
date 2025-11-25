<?php
require_once "./class/categorias.php";

if ($_SERVER['REMOTE_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';

    if (!empty($nombre)) {
        $categoria = new Categorias();
        $categoria->setNombre($nombre);
        $categoria->guardar();

        echo "<script> alert('categoria guardada); window.location.href='views/lista_categorias.html'; </script>";
    } else {
        echo "<script>'error al guardar'; window.history.back();</script>";
    }
}
