<?php

class ActualizarEditorialModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    

    public function getEditoriales($id){
        $consulta = "SELECT * FROM ".DBNAME.".editoriales e WHERE id = $id";
       
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }
    
    

    public function updateEditorial($id,$nombre,$activo){
        $consulta = "UPDATE editoriales set  nombre = ?, activo = ? WHERE id = $id ";
        $arrayDatos = array($nombre,$activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    

}