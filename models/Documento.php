<?php

class Documento
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=peoplepro", "root", "");
    }

    public function guardar($nombre, $archivo)
    {
        $stmt = $this->conn->prepare("INSERT INTO documentos (nombre, archivo) VALUES (:nombre, :archivo)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':archivo', $archivo);
        return $stmt->execute();
    }

    public function obtenerTodos()
{
    $stmt = $this->conn->prepare("SELECT * FROM documentos ORDER BY fecha_subida DESC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


public function obtenerPorId($id)
{
    $stmt = $this->conn->prepare("SELECT * FROM documentos WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function eliminar($id)
{
    $stmt = $this->conn->prepare("DELETE FROM documentos WHERE id = ?");
    return $stmt->execute([$id]);
}

public function actualizar($id, $nombre, $nuevoArchivo = null)
{
    if ($nuevoArchivo) {
        $stmt = $this->conn->prepare("UPDATE documentos SET nombre = ?, archivo = ? WHERE id = ?");
        return $stmt->execute([$nombre, $nuevoArchivo, $id]);
    } else {
        $stmt = $this->conn->prepare("UPDATE documentos SET nombre = ? WHERE id = ?");
        return $stmt->execute([$nombre, $id]);
    }
}


}
