<?php

class ListarCamposModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarCampos(){
        $consulta = "SELECT * from campos_dinamicos where eliminado = 0";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

    public function desactivarCampo($id){
        $eliminado = 1;
        $consulta = "UPDATE campos_dinamicos set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }
    

}