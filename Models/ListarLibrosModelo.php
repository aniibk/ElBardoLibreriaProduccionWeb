<?php

//aca se hacen las consultas a la base de datos
class ListarLibrosModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarLibrosModelo($inicio, $limite){
        $consulta = "SELECT l.id, l.nombre, l.destacado, l.descripcion,. l.activo, g.nombre as nombreGenero, e.nombre as nombreEditorial from libros l  
        INNER JOIN editoriales e
        on l.editorial_id = e.id
        INNER JOIN generos g  
        on l.genero_id = g.id
        
        where l.eliminado = 0 ORDER BY id LIMIT $inicio,$limite" ; 
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
    
    public function contarLibros(){
        $consulta = "SELECT * from libros where eliminado = 0";
            $resultado = $this -> contar($consulta);
        return $resultado;
    }
}