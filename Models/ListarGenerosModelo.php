<?php

//aca se hacen las consultas a la base de datos
class ListarGenerosModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarGenero(){
        $consulta = "SELECT * from generos where eliminado = 0";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

    public function desactivarGenero($id){
        $eliminado = 1;
        $consulta = "UPDATE generos set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }
    

}