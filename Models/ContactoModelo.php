<?php

//aca se hacen las consultas a la base de datos
class ContactoModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function obtenerSectores(){
        $consulta = "SELECT * FROM ".DBNAME.".sectores";
        
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

}