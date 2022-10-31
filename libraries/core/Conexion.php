<?php

class Conexion{
    private $conexion;

    public function __construct(){
        $stringConexion = "mysql:host=" . HOST .";dbname=" . DBNAME .";charset=utf8";        
        try {
            $this -> conexion = new PDO($stringConexion, USUARIO, PASSWORD);
            $this -> conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
        } catch (PDOException $th) {
            $this -> conexion = 'Error de conexion';
            echo "ERROR!!!: " . $th -> getMessage();
        }
    
    }
    
    public function conectar(){
        return $this -> conexion;
    }
}

?>
