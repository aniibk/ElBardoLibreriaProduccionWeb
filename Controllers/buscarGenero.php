<?php

class BuscarGenero extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    
 
    public function buscarGenero(){
        $datos = array();        
        
        if (isset($_GET['busqueda'])) {
           $datos['busqueda'] = $_GET['busqueda'];
           $datos['resultadoBusqueda'] = $this -> modelo ->getBusqueda($datos['busqueda']);
        }

        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }

    public function eliminarGenero(){
        $datos = array();        

        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarGenero($_GET['id']);
        }
        header('Location: buscarGenero');
    }
   
   
}