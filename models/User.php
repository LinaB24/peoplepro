<?php
class User {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection(); // Asumiendo que tienes esta clase para DB
    }

    public function obtenerTodos() {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($data) {
        $stmt = $this->conn->prepare("INSERT INTO users (nombre, email, password, rol, area_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$data['nombre'], $data['email'], $data['password'], $data['rol'], $data['area_id']]);
    }

    public function actualizarArea($userId, $areaId) {
        $stmt = $this->conn->prepare("UPDATE users SET area_id = ? WHERE id = ?");
        return $stmt->execute([$areaId, $userId]);
    }

    // otros métodos que necesites...
}
