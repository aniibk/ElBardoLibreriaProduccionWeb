<?php

class HabilitarComentarioModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    

    public function getComentario($id){
        $consulta = "SELECT c.*, l.nombre as nombreLibro FROM ".DBNAME.".comentarios c
        INNER JOIN libros l 
        ON c.libro_id = l.id
        WHERE c.id = $id";
        $resultado = $this -> seleccionar($consulta);
        return $resultado;

    }
    public function getComentarioDinamico($id){
        $consulta = "SELECT cdin.nombre, cd.valor FROM ".DBNAME.".comentario_dinam cd
        INNER JOIN comentarios c
        ON c.id = cd.comentario_id
        INNER JOIN campos_dinamicos cdin
        ON cdin.id = cd.campo_din_id
        WHERE c.id = $id";
        
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;

    }
   
    

    public function updateComentario($id,$activo){
        $consulta = "UPDATE comentarios set activo = ? WHERE id = $id ";
        $arrayDatos = array($activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    

}