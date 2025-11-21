<?php

spl_autoload_register(function($clase) {
    $ruta = __DIR__ . '/' . $clase . '.php';
    if (file_exists($ruta)) {
        require_once $ruta;
    }
});


if (isset($_POST['action'])) {
    include_once 'data_base.php';
    include_once 'categorias.php';
    include_once 'productos.php';

    $db = new DataBase();

    switch($_POST['action']) {
        case 'listarCategorias':
            $categorias = $db->select("SELECT * FROM categoria");
            foreach ($categorias as $cat) {
                echo "<tr>
                        <td>{$cat['id']}</td>
                        <td>{$cat['nombre']}</td>
                        </tr>";
            }
            break;

        case "listarProductos":
            $productos = $db->select("SELECT * FROM productos");
            foreach ($productos as $producto) {
                echo "<tr>
                        <td>{$producto['id']}</td>
                        <td>{$producto['nombre']}</td>
                        <td>{$producto['nombre']}</td>
                        <td>{$producto['categoria']}</td>
                        <td>{$producto['precio']}</td>
                        </tr>";
            }
            break;
    }
}