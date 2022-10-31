<?php

//aca se hacen las consultas a la base de datos
class AgregarCamposModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
 
    public function insertCampo($nombre, $opciones, $tipo, $activo){
    
        $consulta = "INSERT INTO campos_dinamicos (nombre, opciones, tipo, activo) VALUES (?, ?, ?, ?)";
        $arrayDatos = array($nombre, $opciones, $tipo, $activo);

        $resultado = $this -> insertar($consulta, $arrayDatos);
    }

}