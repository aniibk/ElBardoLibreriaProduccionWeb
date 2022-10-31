<?php

class ListarGeneros extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function listarGeneros(){
        $datos = array();
        $datos['listadoGeneros'] = $this -> modelo -> listarGenero();
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }

    public function eliminarGenero(){
        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarGenero($_GET['id']);
        }
        header('Location: listarGeneros');
    }

    
}