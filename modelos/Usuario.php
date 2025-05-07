<?php
require_once(__DIR__ . '/../core/Conexion.php');

class Usuario
{
    private $db;

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

    // Registrar nuevo usuario con clave encriptada
    public function registrar($usuario, $clave)
    {
        $claveHash = password_hash($clave, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO usuarios (usuario, clave) VALUES (?, ?)");
        return $stmt->execute([$usuario, $claveHash]);
    }
}
