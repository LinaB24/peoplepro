<?php
class Area {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM areas");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM areas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($data) {
        $stmt = $this->conn->prepare("INSERT INTO areas (nombre, descripcion, color_fondo) VALUES (?, ?, ?)");
        return $stmt->execute([$data['nombre'], $data['descripcion'] ?? null,  $data['color_fondo'] ?? '#F7F7F8']);
    }

    public function actualizar($data) {
    $stmt = $this->conn->prepare("UPDATE areas SET nombre = ?, descripcion = ?, color_fondo = ? WHERE id = ?");
    return $stmt->execute([$data['nombre'], $data['descripcion'] ?? null, $data['color_fondo'] ?? '#F7F7F8', $data['id']
    ]);
}

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM areas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
