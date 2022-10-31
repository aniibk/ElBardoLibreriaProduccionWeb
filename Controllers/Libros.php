<?php

class Libros extends Controllers{
    public function __construct(){
        parent::__construct();
        
    }
    

    public function libros(){
        $datos['generos']=  $this -> modelo -> obtenerGeneros();
        $datos['editoriales']= $this -> modelo -> obtenerEditoriales();
        
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
       
        
    }
    
    public function getComentarios(){
        $comentarios = $this -> modelo -> obtenerComentariosActivosTotales();
        $comentarios = json_encode($comentarios);
        echo $comentarios;  
    }
   
    public function producto($id){
        $id = explode(',', $id);
        $datos = $this -> modelo -> obtenerLibro($id[0]);
        $promedios = $this -> modelo -> obtenerPromedioEstrellas($id[0]);

        
        $promedios = round($promedios['promedio']);
        
        $datos['promedio'] = $promedios;
        
        
        $comentarios = $this -> modelo -> obtenerTodosComentarios($id[0]);
        $datos['comentarios'] = $comentarios;

        $datos['camposDinamicosActivosProducto']= $this -> modelo -> obtenerCamposDinamicosActivosProducto($id[0]);
        $datos['camposDinamicosActivosComentario']= $this -> modelo -> obtenerCamposDinamicosActivosComentarios($id[0]);
        
        $this -> vista -> verVista($this,"producto",$datos);
        
    }

   
}

