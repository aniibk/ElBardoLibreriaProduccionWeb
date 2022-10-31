<?php

//aca se hacen las consultas a la base de datos
class ListarEditorialModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarEditorial(){
        $consulta = "SELECT * from editoriales where eliminado = 0";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

    public function desactivarEditorial($id){
        $eliminado = 1;
        $consulta = "UPDATE editoriales set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }
    

}