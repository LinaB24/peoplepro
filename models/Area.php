<?php
require_once __DIR__ . '/../core/Model.php';

class Area extends Model {
    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM `areas`");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM `areas` WHERE `id` = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($data) {
        $stmt = $this->conn->prepare(
            "INSERT INTO `areas` (`nombre`, `descripcion`) VALUES (?, ?)"
        );
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'] ?? null
        ]);
    }

    public function actualizar($data) {
        $stmt = $this->conn->prepare(
            "UPDATE `areas` SET `nombre` = ?, `descripcion` = ? WHERE `id` = ?"
        );
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'] ?? null,
            $data['id']
        ]);
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM `areas` WHERE `id` = ?");
        return $stmt->execute([$id]);
    }
}
