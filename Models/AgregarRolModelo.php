<?php

//aca se hacen las consultas a la base de datos
class AgregarRolModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    // 
//hacer metodo agregar libro db 
    // 
    public function getPrivilegios(){
        $consulta = "SELECT * FROM ".DBNAME.".privilegios ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function insertRol($nombre, $privilegios,$activo){
        $consulta = "INSERT INTO roles (nombre, privilegios_id, activo) VALUES (?, ?, ?)";
        $arrayDatos = array($nombre, $privilegios, $activo);

        $resultado = $this -> insertar($consulta, $arrayDatos);
    }

}