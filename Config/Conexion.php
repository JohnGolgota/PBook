<?php

class Conexion{
    public $stm;
    public function __construct(){
        try{
            $this->stm = new PDO("mysql:host=localhost;dbname=colection", 'root', '');
        } catch(PDOException $error) {
            echo "Error: ". $error->getMessage();
        }
    }
}
?>