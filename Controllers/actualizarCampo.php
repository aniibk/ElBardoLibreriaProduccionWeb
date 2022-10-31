<?php

class ActualizarCampo extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function actualizarCampo(){
        $datos = array();      
        $id = null;  
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
          
            
        }
       
        $datos['campos'] = $this -> modelo ->getCampo($id);
        
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }
    
    public function updateCampo(){
        if (isset($_GET['actualizar'])) {
        //ver($_GET);exit;
            $id = $_GET['id'];
            $nombre = $_GET['titulo'];
            $opciones = $_GET['opciones'];
            $activo = isset($_GET['activo']);
      

            $this -> modelo ->updateCampo($id,$nombre, $opciones ,$activo);

            
            //$datos['genero'] = $this -> modelo ->getGeneros($id);
            header("Location: actualizarCampo?id=$id");
            //$this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        }
        
        
    }
    
    
   
}