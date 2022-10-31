<?php

//aca se hacen las consultas a la base de datos
class ActualizarLibroModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function buscarLibro($id){
        $consulta = "SELECT l.*, g.nombre as nombreGenero, e.nombre as nombreEditorial from libros l  
        INNER JOIN editoriales e
        on l.editorial_id = e.id
        INNER JOIN generos g  
        on l.genero_id = g.id  WHERE l.id = $id";
       
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }

    public function getEditoriales(){
        $consulta = "SELECT e.id, e.nombre FROM ".DBNAME.".editoriales e WHERE activo = 1 ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    public function getGeneros(){
        $consulta = "SELECT g.id, g.nombre FROM ".DBNAME.".generos g WHERE activo = 1 ORDER by nombre ASC";
       
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

    public function updateLibro($id,$editorial,$genero,$nombre,$descripcion,$precio,$destacado,$fecha,$activo){
        $consulta = "UPDATE libros set editorial_id = ?, genero_id = ?, nombre = ?, descripcion = ?, precio = ?, destacado = ?, fecha = ?, activo = ? WHERE id = $id ";
        $arrayDatos = array($editorial,$genero,$nombre,$descripcion,$precio,$destacado,$fecha,$activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }

    public function listarCampos($id){
        $consulta = "SELECT c.*, p.* FROM campos_dinamicos c 
        INNER JOIN producto_campo_din p
        on p.campo_din_id = c.id 
        where p.producto_id = $id and p.eliminado = 0";

        //$consulta = "SELECT * from producto_campo_din where producto_id = $id and eliminado = 0";

        // $consulta = "SELECT * from campos_dinamicos where eliminado = 0 and activo =1 and tipo like 'p'";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }

    public function listarCamposActivosProducto($id){
        $consulta = "SELECT * from producto_campo_din where producto_id = $id and activo = 1";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function updateCampoDinProducto($idproducto, $idCampoDinamico, $activo){
        $consulta = "UPDATE producto_campo_din set activo = ? WHERE producto_id = $idproducto AND campo_din_id = $idCampoDinamico";
        //
        $arrayDatos = array($activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    
    // public function getGeneros(){
    //     $consulta = "SELECT g.id, g.nombre FROM ".DBNAME.".generos g WHERE activo = 1 ORDER by nombre ASC";
       
    //     $resultado = $this -> seleccionarTodos($consulta);
    //     return $resultado;
    // }

}