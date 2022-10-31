<?php

class BuscarEditorial extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    
 
    public function buscarEditorial(){
        $datos = array();        
        
        if (isset($_GET['busqueda'])) {
           $datos['busqueda'] = $_GET['busqueda'];
           $datos['resultadoBusqueda'] = $this -> modelo ->getBusqueda($datos['busqueda']);
        }

        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }

    public function eliminarEditorial(){
        $datos = array();        

        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarEditorial($_GET['id']);
        }
        header('Location: buscarEditorial');
    }
   
   
}