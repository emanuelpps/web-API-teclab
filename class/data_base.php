<?php
class DataBase
{
    private $host = "3306";
    private $user = "root";
    private $pass = "";
    private $db = "miproyecto";
    private $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexion: " . $e->getMessage());
        }
    }
}
