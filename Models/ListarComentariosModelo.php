<?php

//aca se hacen las consultas a la base de datos
class ListarComentariosModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarComentarios($inicio, $limite){
        // $consulta = "SELECT l.id, l.nombre, l.destacado, l.descripcion,. l.activo, g.nombre as nombreGenero, e.nombre as nombreEditorial from libros l  
        // INNER JOIN editoriales e
        // on l.editorial_id = e.id
        // INNER JOIN generos g  
        // on l.genero_id = g.id
        
        // where l.eliminado = 0";
        $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id LIMIT $inicio, $limite";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

    public function desactivarLibro($id){
        $eliminado = 1;
        $consulta = "UPDATE libros set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }
    public function contarComentarios(){
        $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id";

            $resultado = $this -> contar($consulta);
        return $resultado;
    }
    

}