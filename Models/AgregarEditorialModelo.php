<?php

//aca se hacen las consultas a la base de datos
class AgregarEditorialModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    // 

    public function getEditoriales(){
        $consulta = "SELECT e.id, e.nombre FROM ".DBNAME.".editoriales e WHERE activo = 1 ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function insertEditorial($nombre, $activo){
        $consulta = "INSERT INTO editoriales (nombre, activo) VALUES (?, ?)";
        $arrayDatos = array($nombre, $activo);

        $resultado = $this -> insertar($consulta, $arrayDatos);
    }

}