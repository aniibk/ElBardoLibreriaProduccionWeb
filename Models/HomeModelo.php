<?php

//aca se hacen las consultas a la base de datos
class HomeModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function obtenerDestacados(){
        $consulta = "SELECT * FROM libros WHERE destacado = 1 and activo = 1 and eliminado = 0 ORDER BY Rand() Limit 9";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;
    }
   
    public function obtenerComentariosActivosTotales(){
        $consulta = "SELECT * FROM comentarios WHERE activo = 1";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;
    }
  

}

?>
