<?php

//aca se hacen las consultas a la base de datos
class BuscarGeneroModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function getBusqueda($busqueda){
        $consulta = "SELECT * from generos WHERE nombre LIKE '%".$busqueda."%' AND eliminado = 0";
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