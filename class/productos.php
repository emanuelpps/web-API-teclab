<?php
require_once 'data_base.php';

class Productos
{
    private $id;
    private $nombre;
    private $categoria;
    private $precio;
    private $db;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    // --- Setters ---
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    // --- Guardar producto ---
    public function guardar()
    {
        $sql = "INSERT INTO productos (nombre, categoria, precio) 
                VALUES (?, ?, ?, ?)";
        $params = [$this->nombre, $this->categoria, $this->precio];
        return $this->db->insert($sql, $params);
    }

    // --- Eliminar producto ---
    public function eliminar($id)
    {
        $sql = "DELETE FROM productos WHERE id = ?";
        $params = [$id];
        return $this->db->delete($sql, $params);
    }

    // Api4 JOIN entre la tabla productos y categoria
    public function listarConCategorias()
    {
        $db = new DataBase();
        $sql = "SELECT p.id, p.nombre, p.precio , c.nombre AS categoria 
                FROM productos p 
                INNER JOIN categoria c ON p.categoria = c.id";
        return $db->select($sql);
    }
}
