<?php

class AgregarGenero extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function agregarGenero(){
       
        $this -> vista -> verVista($this,strtolower(get_class($this)));
    }
    public function creaGenero(){
        if (isset($_GET['agregar'])) {
            
            $nombre = $_GET['titulo'];
            $activo = isset($_GET['activo']);
            $this -> modelo ->insertGenero($nombre,$activo);
        }
        header("location: agregarGenero");
    }

   
   
}