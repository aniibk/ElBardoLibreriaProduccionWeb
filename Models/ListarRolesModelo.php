<?php

//aca se hacen las consultas a la base de datos
class ListarRolesModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarRoles(){
        $consulta = "SELECT * from roles where eliminado = 0";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

    public function desactivarRol($id){
        $eliminado = 1;
        $consulta = "UPDATE roles set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }
    

}