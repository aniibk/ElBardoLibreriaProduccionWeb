<?php

class ActualizarEditorial extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function actualizarEditorial(){
        $datos = array();      
        $id = null;  
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
          
            
        }
       
        $datos['editorial'] = $this -> modelo ->getEditoriales($id);
        
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }
    
    public function updateEditorial(){
        if (isset($_GET['actualizar'])) {

            $id = $_GET['id'];
            $nombre = $_GET['titulo'];
            $activo = isset($_GET['activo']);
      

            $this -> modelo ->updateEditorial($id,$nombre,$activo);

            
            $datos['editorial'] = $this -> modelo ->getEditoriales($id);
            
            $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        }
        
        
    }
    
    
   
}