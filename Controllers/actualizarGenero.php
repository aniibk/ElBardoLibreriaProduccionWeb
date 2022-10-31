<?php

class ActualizarGenero extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function actualizarGenero(){
        $datos = array();      
        $id = null;  
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
          
            
        }
       
        $datos['genero'] = $this -> modelo ->getGeneros($id);
        
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }
    
    public function updateGenero(){
        if (isset($_GET['actualizar'])) {

            $id = $_GET['id'];
            $nombre = $_GET['titulo'];
            $activo = isset($_GET['activo']);
      

            $this -> modelo ->updateGenero($id,$nombre,$activo);

            
            $datos['genero'] = $this -> modelo ->getGeneros($id);
            
            $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        }
        
        
    }
    
    
   
}