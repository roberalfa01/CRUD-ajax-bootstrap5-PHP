<?php

class Conectar 
{
    private $pdo;
    
    public function conexion()
    {
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=crud_personas", "root", "");
        } catch(PDOException $e){
            echo "Error en conexion" . $e->getMessage();
        }
        return $pdo;
    }
}