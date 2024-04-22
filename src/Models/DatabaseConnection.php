<?php

include 'Interface/DatabaseConnectionInterface.php';

// This is a class is intended only for Connection and nothing else.
// To use this class, simply instantiate and use the credentials of your database
// and provide it in the constructor.
// It is recommended to use .env file or any other method to securely store your credentials.
// Avoid hard coding your credentials in this file or any file in the project.
class DatabaseConnection implements DatabaseConnectionInterface {

    private $db_username;
    private $db_password;
    private $db_name;
    private $db_host;

    public function __construct($db_username, $db_password, $db_name, $db_host)
    {
        $this->db_username = $db_username;
        $this->db_password = $db_password;
        $this->db_name = $db_name;
        $this->db_host = $db_host;
    }

    public function InitializeConnection() {
        return $this->connect();
    }

    private function DSN() {
        return "pgsql:host=$this->db_host;dbname=$this->db_name"; 
    }

    private function PDO() {
        return new PDO($this->DSN(), 
        $this->db_username, 
        $this->db_password, 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public function connect()
    {
        $pdo = $this->PDO();
        try {
            if($pdo) {
                echo "Connected to the <strong>$this->db_name</strong> database successfully!";
            }
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        } finally {
            $pdo = null;
        }
    }
        
}