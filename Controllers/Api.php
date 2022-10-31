<?php

class Api extends Controllers{
    public function __construct(){
        parent::__construct();
        
    }
    

    public function libros(){
        
        $datos = array();
        $this -> modelo -> obtenerLibros($this,strtolower(get_class($this)),$datos);
    }
   
    
}