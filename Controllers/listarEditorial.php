<?php

class ListarEditorial extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function listarEditorial(){
        $datos = array();
        $datos['listadoEditoriales'] = $this -> modelo -> listarEditorial();
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }

    public function eliminarEditorial(){
        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarEditorial($_GET['id']);
        }
        header('Location: listarEditorial');
    }

    
}