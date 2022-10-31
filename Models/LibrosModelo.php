<?php

class LibrosModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    
    public function todosLosLibros(){
        $consulta = "SELECT *, g.nombre as nombreGenero, e.nombre as nombreEditorial from libros l  
        INNER JOIN editoriales e
        on l.editorial_id = e.id
        INNER JOIN generos g  
        on l.genero_id = g.id WHERE activo = 1";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;
    }

    public function obtenerComentariosActivosTotales(){
        $consulta = "SELECT * FROM comentarios WHERE activo = 1";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;
    }
   
    public function obtenerLibro($id){
        $consulta = "SELECT l.*, g.nombre as nombreGenero, e.nombre as nombreEditorial from libros l  
        INNER JOIN editoriales e
        on l.editorial_id = e.id
        INNER JOIN generos g  
        on l.genero_id = g.id WHERE l.id = $id;";
        $respuesta = $this -> seleccionar($consulta);
        return $respuesta;
    }

    public function obtenerPromedioEstrellas($id){
        $consulta = "SELECT AVG(valoracion) AS promedio FROM comentarios WHERE libro_id = $id and activo = 1";
        $respuesta = $this -> seleccionar($consulta);
        return $respuesta;
    }

    public function obtenerTodosComentarios($id){
        $consulta = "SELECT * FROM comentarios WHERE libro_id = $id and activo = 1";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;

    }

    public function obtenerGeneros(){
        $consulta = "SELECT * FROM generos;";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;

    }
    public function obtenerEditoriales(){
        $consulta = "SELECT * FROM editoriales;";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;

    }
    public function obtenerCamposDinamicosActivosProducto($idProducto){
        $consulta = "SELECT c.opciones FROM campos_dinamicos c
        INNER JOIN producto_campo_din p
        ON p.campo_din_id = c.id
        WHERE p.producto_id = $idProducto and p.activo = 1 and p.eliminado = 0 and c.tipo LIKE 'p';";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;

    }
    public function obtenerCamposDinamicosActivosComentarios($idProducto){
        $consulta = "SELECT c.* FROM campos_dinamicos c
        INNER JOIN producto_campo_din p
        ON p.campo_din_id = c.id
        WHERE p.producto_id = $idProducto and p.activo = 1 and p.eliminado = 0 and c.tipo <> 'p';";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;

    }

}

?>
