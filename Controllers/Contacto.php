<?php

class Contacto extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function contacto(){
               
     $datos = $this -> modelo ->obtenerSectores();        
     $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }

   
   
}