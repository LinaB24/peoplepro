<?php
class Permiso {
    private $conn;
    private $table = "permisos";

    public function __construct() {
        require_once "../config/database.php";
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function obtenerTodos() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($tipo) {
    $stmt = $this->conn->prepare("INSERT INTO permisos (tipo) VALUES (:tipo)");
    $stmt->bindParam(':tipo', $tipo);
    return $stmt->execute();
}

// Método para obtener un permiso por su ID
public function obtenerPorId($id) {
    $stmt = $this->conn->prepare("SELECT * FROM permisos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Método para actualizar un permiso
public function actualizar($id, $tipo) {
    $stmt = $this->conn->prepare("UPDATE permisos SET tipo = :tipo WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':tipo', $tipo);
    return $stmt->execute();
}

// Método para eliminar un permiso
public function eliminar($id) {
    $stmt = $this->conn->prepare("DELETE FROM permisos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}


}
