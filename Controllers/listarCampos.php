<?php

class ListarCampos extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function listarCampos(){
        $datos = array();
        $datos['listadoCampos'] = $this -> modelo -> listarCampos();
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }

    public function eliminarCampo(){
        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarCampo($_GET['id']);
        }
        header('Location: listarCampos');
    }

    
}