<?php
class Beneficio {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function obtenerTodos() {
        $stmt = $this->conn->prepare("SELECT * FROM beneficios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM beneficios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($data) {
        $stmt = $this->conn->prepare("INSERT INTO beneficios (nombre, descripcion, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'],
            $data['fecha_inicio'],
            $data['fecha_fin']
        ]);
    }

    public function actualizar($data) {
        $stmt = $this->conn->prepare("UPDATE beneficios SET nombre = ?, descripcion = ?, fecha_inicio = ?, fecha_fin = ? WHERE id = ?");
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'],
            $data['fecha_inicio'],
            $data['fecha_fin'],
            $data['id']
        ]);
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM beneficios WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
