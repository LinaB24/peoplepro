<?php
require_once(__DIR__ . '/../core/Conexion.php');

class Usuario
{
    private $db;
    // validacion de usuario
    
    public function __construct()
    {
        $this->db = Conexion::getInstancia()->getConexion();
    }

    public function validar($usuario, $clave)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $stmt->execute([$usuario]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($clave, $user['clave'])) {
            return $user;
        }

        return false;
    }
    // registrar un nuevo usuario
    public function registrar($usuario, $clave)
    {
        $claveHash = password_hash($clave, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO usuarios (usuario, clave) VALUES (?, ?)");
        return $stmt->execute([$usuario, $claveHash]);
    }

    // Obtener usuarios asignados a un área
    public function obtenerPorArea($area_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE area_id = ?");
        $stmt->execute([$area_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener usuarios sin área asignada
    public function obtenerSinArea()
    {
        $stmt = $this->db->query("SELECT * FROM usuarios WHERE area_id IS NULL");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Asignar un usuario a un área
    public function asignarArea($usuario_id, $area_id)
    {
        $stmt = $this->db->prepare("UPDATE usuarios SET area_id = ? WHERE id = ?");
        return $stmt->execute([$area_id, $usuario_id]);
    }

    // Quitar un usuario del área
    public function quitarArea($usuario_id)
    {
        $stmt = $this->db->prepare("UPDATE usuarios SET area_id = NULL WHERE id = ?");
        return $stmt->execute([$usuario_id]);
    }
}
