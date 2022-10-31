<?php

class HabilitarComentario extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function habilitarComentario(){
        $datos = array();      
        $id = null;  
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
          
            
        }
       
        $datos['comentario'] = $this -> modelo ->getComentario($id);
        $datos['comentarioDinamico'] = $this -> modelo ->getComentarioDinamico($id);
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }
    
    public function updateComentario(){
        if (isset($_GET['actualizar'])) {

            $id = $_GET['id'];
            $activo = isset($_GET['activo']);
      

            $this -> modelo ->updateComentario($id,$activo);

            
            $datos['comentario'] = $this -> modelo ->getComentario($id);
            $datos['comentarioDinamico'] = $this -> modelo ->getComentarioDinamico($id);
            
            $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        }
        
        
    }
    
    
   
}