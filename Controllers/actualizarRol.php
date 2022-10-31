<?php

class ActualizarRol extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function actualizarRol(){
        $datos = array();      
        $id = null;  
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
          
            
        }
       
        $datos['rol'] = $this -> modelo ->getRol($id);
        $datos['privilegios'] = $this -> modelo -> getPrivilegios();
        
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }
    
    public function updateRol(){
        if (isset($_GET['actualizar'])) {

            $id = $_GET['id'];
            $nombre = $_GET['titulo'];
            $privilegio = $_GET['privilegios'];
            $activo = isset($_GET['activo']);
      

            $this -> modelo ->updateRol($id,$nombre, $privilegio, $activo);

            
            $datos['rol'] = $this -> modelo ->getRol($id);
            $datos['privilegios'] = $this -> modelo -> getPrivilegios();
            $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        }
        
        
    }
    
    
   
}