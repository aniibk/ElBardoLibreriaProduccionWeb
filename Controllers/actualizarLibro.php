<?php

class ActualizarLibro extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function actualizarLibro(){
        $datos = array();      
        $id = null;  
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
          
            
        }
        $datos['libro'] = $this -> modelo ->buscarLibro($id);
        $datos['editoriales'] = $this -> modelo ->getEditoriales($id);
        $datos['generos'] = $this -> modelo ->getGeneros($id);
        $datos['listadoCampos'] = $this -> modelo ->listarCampos($id);
        $datos['camposActivosProducto']= $this -> modelo -> listarCamposActivosProducto($id);
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);

        // listarCampos
    }
    
    public function updateLibro(){
        
        //ver($_GET);
        
        
        if (isset($_GET['actualizar'])) {
            $id = $_GET['idLibro'];
            if (isset($_GET['campos_din_producto'])) {
                
                foreach ($_GET['campos_din_producto'] as $key => $value) {
                    
                    foreach ($value as $keys => $values) {
                        $campoDinamicoId = $keys;
                        $activo = $values[0];
                    }
                    
                    ver($id);
                    ver($campoDinamicoId);
                    ver($values);
                   ver($this -> modelo -> updateCampoDinProducto($id, $campoDinamicoId, $activo));
                   
                }
                
            }
            $editorial = $_GET['editorial'];
            $genero = $_GET['genero'];
            $nombre = $_GET['titulo'];
            $descripcion = $_GET['descripcion'];
            $precio = $_GET['precio'];
            $destacado = isset($_GET['destacado']);
            date_default_timezone_set('UTC');
            $fecha = date('Ymd');
            //agregar imangen portada
            //agregar imagen banner
            $activo = isset($_GET['activo']);
      

            $this -> modelo ->updateLibro($id,$editorial,$genero,$nombre,$descripcion,$precio,$destacado,$fecha,$activo);

            $datos['libro'] = $this -> modelo ->buscarLibro($id);
            $datos['editoriales'] = $this -> modelo ->getEditoriales();
            $datos['generos'] = $this -> modelo ->getGeneros();
            $datos['listadoCampos'] = $this -> modelo ->listarCampos($id);
            $datos['camposActivosProducto']= $this -> modelo -> listarCamposActivosProducto($id);
            $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        }
        
        
    }
    
    
   
}