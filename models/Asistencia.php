<?php
require_once 'Database.php';

class Asistencia {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function registrarLlegada($usuario_id) {
        $fecha_hoy = date('Y-m-d');
        $hora_llegada = date('H:i:s');

        // Verificar si ya existe un registro para hoy
        $query = $this->conn->prepare("SELECT * FROM registros_asistencia WHERE usuario_id = :usuario_id AND fecha = :fecha");
        $query->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $query->bindParam(':fecha', $fecha_hoy);
        $query->execute();

        if ($query->rowCount() > 0) {
            return false; // Ya existe un registro para hoy
        }

        $insert = $this->conn->prepare("INSERT INTO registros_asistencia (usuario_id, fecha, hora_llegada) VALUES (:usuario_id, :fecha, :hora_llegada)");
        $insert->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $insert->bindParam(':fecha', $fecha_hoy);
        $insert->bindParam(':hora_llegada', $hora_llegada);
        return $insert->execute();
    }

    public function registrarSalida($usuario_id) {
        $fecha_hoy = date('Y-m-d');
        $hora_salida = date('H:i:s');

        // Verificar si hay un registro para hoy
        $query = $this->conn->prepare("SELECT * FROM registros_asistencia WHERE usuario_id = :usuario_id AND fecha = :fecha");
        $query->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $query->bindParam(':fecha', $fecha_hoy);
        $query->execute();

        if ($query->rowCount() === 0) {
            return false; // No hay registro de llegada para hoy
        }

        $update = $this->conn->prepare("UPDATE registros_asistencia SET hora_salida = :hora_salida WHERE usuario_id = :usuario_id AND fecha = :fecha");
        $update->bindParam(':hora_salida', $hora_salida);
        $update->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $update->bindParam(':fecha', $fecha_hoy);
        return $update->execute();
    }

    public function obtenerPorUsuario($usuario_id) {
        $query = $this->conn->prepare("SELECT * FROM registros_asistencia WHERE usuario_id = :usuario_id ORDER BY fecha DESC");
        $query->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
