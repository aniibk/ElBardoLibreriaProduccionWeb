<?php

//aca se hacen las consultas a la base de datos
class DashboardModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function cuentaTodosRegistros($parametro){
        $consulta = "SELECT * FROM ".DBNAME.".".$parametro."";
        $resultado = $this -> seleccionarTodos($consulta);
        $resultado = count($resultado);
        return $resultado;
    }

}