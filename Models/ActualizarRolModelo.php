<?php

class ActualizarRolModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    

    public function getRol($id){
        $consulta = "SELECT * FROM ".DBNAME.".roles WHERE id = $id";
       
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }

    public function getPrivilegios(){
        $consulta = "SELECT * FROM ".DBNAME.".privilegios ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    

    public function updateRol($id,$nombre, $privilegios, $activo){
        $consulta = "UPDATE roles set  nombre = ?, privilegios_id = ?, activo = ? WHERE id = $id ";
        $arrayDatos = array($nombre, $privilegios, $activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    

}