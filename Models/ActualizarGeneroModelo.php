<?php

class ActualizarGeneroModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    

    public function getGeneros($id){
        $consulta = "SELECT * FROM ".DBNAME.".generos e WHERE id = $id";
       
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }
    
    

    public function updateGenero($id,$nombre,$activo){
        $consulta = "UPDATE generos set  nombre = ?, activo = ? WHERE id = $id ";
        $arrayDatos = array($nombre,$activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    

}