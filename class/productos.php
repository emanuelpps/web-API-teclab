<?php
require_once 'data_base.php';

class Productos
{
    private $id;
    private $nombre;
    private $id_categoria;
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

    public function setCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    // --- Guardar producto ---
    public function guardar()
    {
        $sql = "INSERT INTO productos (nombre, id_categoria, precio) 
            VALUES (?, ?, ?)";
        $params = [$this->nombre, $this->id_categoria, $this->precio];
        return $this->db->insert($sql, $params);
    }

    // --- Eliminar producto ---
    public function eliminar($id)
    {
        $sql = "DELETE FROM productos WHERE id = ?";
        $params = [$id];
        return $this->db->delete($sql, $params);
    }
    public function listarConCategorias()
    {
        $sql = "SELECT p.id, p.nombre, p.precio, c.nombre AS categoria 
            FROM productos p 
            INNER JOIN categoria c ON p.id_categoria = c.id";
        return $this->db->select($sql);
    }
}
