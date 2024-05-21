<?php

class DataConnection {
    private $conn;

    public function __construct($config) {
        if (!isset($config['host'], $config['username'], $config['password'], $config['database'])) {
            throw new Exception("Configuration array missing required keys.");
        }

        $this->conn = mysqli_connect(
            $config['host'],
            $config['username'],
            $config['password'],
            $config['database']
        );

        if (!$this->conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }
    }

    public function Connection() {
        return $this->conn;
    }
}

$config = require('../config.php');
$DataConnection = new DataConnection($config);
$conn = $DataConnection->Connection();

?>
