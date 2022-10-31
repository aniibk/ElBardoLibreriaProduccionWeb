<?php

class AgregarRol extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function agregarRol(){
        $datos['privilegios'] = $this -> modelo ->getprivilegios(); 
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }
    
    
    public function creaRol(){
        if (isset($_GET['agregar'])) {
            
            $nombre = $_GET['titulo'];
            $privilegios = $_GET['privilegios'];
            $activo = isset($_GET['activo']);
            $this -> modelo ->insertRol($nombre, $privilegios, $activo);
        }
        header("location: agregarRol");
    }

   
   
}