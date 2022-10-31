<?php

class AgregarEditorial extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function agregarEditorial(){
      
        $this -> vista -> verVista($this,strtolower(get_class($this)));
    }
    public function creaEditorial(){
        if (isset($_GET['agregar'])) {
            
            $nombre = $_GET['titulo'];
            $activo = isset($_GET['activo']);
            $this -> modelo ->insertEditorial($nombre,$activo);
        }
        header("location: agregarEditorial");
    }

   
   
}