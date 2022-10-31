<?php

//aca se hacen las consultas a la base de datos
class AgregarLibroModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    public function insertaLibro($editorial_id,$genero_id,$nombre,$descripcion,$precio,$destacado,$fecha,$urlImagenPortada,$urlImagenBanner,$activo){
        $consulta = "INSERT INTO libros (editorial_id, genero_id, nombre, descripcion, precio, destacado, fecha, imagenPortada, imagenBanner, activo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $arrayDatos = array($editorial_id,$genero_id,$nombre,$descripcion,$precio,$destacado,$fecha,$urlImagenPortada,$urlImagenBanner,$activo);
        $resultado = $this -> insertar($consulta, $arrayDatos);
    }
    public function getEditoriales(){
        $consulta = "SELECT e.id, e.nombre FROM ".DBNAME.".editoriales e WHERE activo = 1 AND eliminado = 0 ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    public function getGeneros(){
        $consulta = "SELECT g.id, g.nombre FROM ".DBNAME.".generos g WHERE activo = 1 AND eliminado = 0 ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    public function lastId(){
        $consulta = "SELECT id FROM libros ORDER BY id DESC";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
}