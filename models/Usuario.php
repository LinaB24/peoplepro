<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['password'])) {
            return ['usuario' => $usuario];
        } else {
            return ['error' => 'Credenciales incorrectas'];
        }
    }
}
