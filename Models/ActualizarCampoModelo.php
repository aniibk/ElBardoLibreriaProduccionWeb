<?php

class ActualizarCampoModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    

    public function getCampo($id){
        $consulta = "SELECT * FROM ".DBNAME.".campos_dinamicos WHERE id = $id";
       
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }
    
    

    public function updateCampo($id,$nombre, $opciones ,$activo){
        $consulta = "UPDATE campos_dinamicos set  nombre = ?, opciones  = ?, activo = ? WHERE id = $id ";
        $arrayDatos = array($nombre, $opciones, $activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    

}