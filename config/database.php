<?php
class Database {
    private $host = "localhost";
    private $db_name = "peoplepro";
    private $username = "root";
    private $password = "";
    private static $conn = null;

    public static function getConnection() {
        if (!self::$conn) {
            try {
                self::$conn = new PDO(
                    "mysql:host=localhost;dbname=peoplepro;charset=utf8mb4",
                    "root", ""
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error en la conexión: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
