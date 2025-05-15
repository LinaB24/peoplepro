<?php
class Conexion {
    private static $instancia = null;
    private $db;

    private $host = "localhost";
    private $dbName = "peoplepro";  
    private $user = "root";           
    private $pass = "";               

    private function __construct() {
        try {
            $this->db = new PDO("mysql:host={$this->host};dbname={$this->dbName};charset=utf8", $this->user, $this->pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function getConexion() {
        return $this->db;
    }
}