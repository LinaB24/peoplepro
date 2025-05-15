<?php
require_once("core/Conexion.php");

class Area
{
    private $db;

    public function __construct()
    {
        $this->db = Conexion::getInstancia()->getConexion();
    }

    public function obtenerTodas()
    {
        $stmt = $this->db->prepare("SELECT * FROM area");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM area WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $descripcion)
    {
        $stmt = $this->db->prepare("INSERT INTO area (nombre, descripcion) VALUES (?, ?)");
        return $stmt->execute([$nombre, $descripcion]);
    }

    public function editar($id, $nombre, $descripcion)
    {
        $stmt = $this->db->prepare("UPDATE area SET nombre = ?, descripcion = ? WHERE id = ?");
        return $stmt->execute([$nombre, $descripcion, $id]);
    }

    public function eliminar($id)
    {
        $stmt = $this->db->prepare("DELETE FROM area WHERE id = ?");
        return $stmt->execute([$id]);
    }
}