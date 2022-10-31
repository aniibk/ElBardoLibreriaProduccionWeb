<?php

//aca se hacen las consultas a la base de datos
class BuscarComentarioModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function getBusqueda($busqueda,$inicio,$limite,$opciones=null){

        // $consulta = "SELECT l.id, l.nombre, l.destacado, l.descripcion,. l.activo, g.nombre as nombreGenero, e.nombre as nombreEditorial from libros l  
        // INNER JOIN editoriales e
        // on l.editorial_id = e.id
        // INNER JOIN generos g  
        // on l.genero_id = g.id
        
        // where l.eliminado = 0 LIMIT $inicio,$limite";

        // $consulta = "SELECT l.id, l.nombre, l.destacado, l.descripcion,. l.activo, g.nombre as nombreGenero, e.nombre as nombreEditorial from libros l  
        // INNER JOIN editoriales e
        // on l.editorial_id = e.id
        // INNER JOIN generos g  
        // on l.genero_id = g.id  WHERE l.nombre LIKE '%".$busqueda."%' AND l.eliminado = 0 AND destacado = 1 ORDER BY l.id LIMIT $inicio,$limite";
        $consulta = null;
                   
            switch ($opciones) {
                case "activo":
                    $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.$opciones = 1 AND l.nombre LIKE '%".$busqueda."%' LIMIT $inicio, $limite";
                    break;
                case "libro":
                    $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE l.nombre LIKE '%".$busqueda."%' LIMIT $inicio, $limite";
                    break;
                case "email":
                    $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.$opciones LIKE '%".$busqueda."%' LIMIT $inicio, $limite";
                    break;
                case "fecha":
                    $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.$opciones LIKE '%".$busqueda."%' LIMIT $inicio, $limite";
                break;
                case "comentarios":
                    $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.descripcion LIKE '%".$busqueda."%' LIMIT $inicio, $limite";
                break;
                case "valoracion":
                    $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.$opciones LIKE '%".$busqueda."%' LIMIT $inicio, $limite";
                break;
            }
      
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function desactivarComentario($id){
        $eliminado = 1;
        $consulta = "UPDATE libros set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }

    public function contarComentariosBusqueda($opciones,$busqueda){
        $consulta ="";
        switch ($opciones) {
            case "activo":
                $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE l.nombre LIKE '%".$busqueda."%' AND c.$opciones = 1";
                break;
            case "libro":
                $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE l.nombre LIKE '%".$busqueda."%'";
                break;
            case "email":
                $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.$opciones LIKE '%".$busqueda."%'";
                break;
            case "fecha":
                $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.$opciones LIKE '%".$busqueda."%'";
            break;
            case "comentarios":
                $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.descripcion LIKE '%".$busqueda."%'";
            break;
            case "valoracion":
                $consulta = "SELECT c.*, l.nombre as nombreLibro FROM comentarios c INNER JOIN libros l on c.libro_id = l.id WHERE c.$opciones LIKE '%".$busqueda."%'";
            break;
        }
            $resultado = $this -> contar($consulta);
        return $resultado;
    }

}