<?php

class Conexion
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";

    public $stm;
    public function __construct()
    {
        try {
            $this->stm = new PDO("mysql:host=localhost;dbname=colection", 'root', '');
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            $this->CrearBD();
        }
    }
    public function CrearBD()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";

        // Create connection
        $connect = new mysqli($servername, $username, $password);
        // Check connection
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }

        // Create database
        $sql = "CREATE DATABASE colection";
        if ($connect->query($sql) === TRUE) {
            echo "Database created successfully";
            CrearTables();
        } else {
            echo "Error creating database: " . $connect->error;
        }

        $connect->close();
    }
    public function CrearTables()
    {
        
    }
}
