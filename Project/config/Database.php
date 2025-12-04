<?php
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        try {
            $host = 'localhost';
            $user = 'root';
            $pass = ''; 
            $dbname = 'rexsport';

            $this->pdo = new PDO("mysql:host=$host", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("USE `$dbname`");
        } catch (PDOException $e) {
            die("Koneksi Gagal: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->pdo;
    }
}
?>