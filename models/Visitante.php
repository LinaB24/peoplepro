<?php
require_once __DIR__ . '/../config/database.php';

class Visitante
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function obtenerTodos()
    {
        $stmt = $this->conn->query("SELECT * FROM visitantes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertar($nombre, $documento, $empresa, $fecha_ingreso, $motivo)
    {
        $stmt = $this->conn->prepare("INSERT INTO visitantes (nombre, documento, empresa, fecha_ingreso, motivo) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nombre, $documento, $empresa, $fecha_ingreso, $motivo]);
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM visitantes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $documento, $empresa, $fecha_ingreso, $motivo)
    {
        $stmt = $this->conn->prepare("UPDATE visitantes SET nombre=?, documento=?, empresa=?, fecha_ingreso=?, motivo=? WHERE id=?");
        return $stmt->execute([$nombre, $documento, $empresa, $fecha_ingreso, $motivo, $id]);
    }

    public function eliminar($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM visitantes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
