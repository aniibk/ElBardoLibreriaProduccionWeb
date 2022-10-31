<?php

//aca se hacen las consultas a la base de datos
class AgregarGeneroModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    // 
//hacer metodo agregar libro db 
    // 
    public function getGenero(){
        $consulta = "SELECT e.id, e.nombre FROM ".DBNAME.".editoriales e WHERE activo = 1 ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function insertGenero($nombre, $activo){
        $consulta = "INSERT INTO generos (nombre, activo) VALUES (?, ?)";
        $arrayDatos = array($nombre, $activo);

        $resultado = $this -> insertar($consulta, $arrayDatos);
    }

}