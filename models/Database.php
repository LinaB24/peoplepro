<?php
class Database
{
    private static $host = 'localhost';
    private static $db = 'peoplepro';
    private static $user = 'root';
    private static $pass = '';
    private static $charset = 'utf8mb4';
    private static $conn;

    public static function getConnection()
    {
        if (!self::$conn) {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;
            try {
                self::$conn = new PDO($dsn, self::$user, self::$pass);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Error de conexión: ' . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
