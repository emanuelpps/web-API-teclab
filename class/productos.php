<?php
require_once "data_base.php";

class Categorias
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

    public function guardar()
    {
        $sql = "INSERT INTO productos (nombre, categoria, precio)
        VALUES (?,?,?)";
        $params = [$this->nombre, $this->categoria, $this->precio];
        return $this->db->insert($sql, $params);
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM productos WHERE id = ?";
        $params = [$id];
        return $this->db->delete($sql, $params);
    }
}
