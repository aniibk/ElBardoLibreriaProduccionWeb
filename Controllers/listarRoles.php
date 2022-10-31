<?php

class ListarRoles extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function listarRoles(){
        $datos = array();
        $datos['listadoRoles'] = $this -> modelo -> listarRoles();
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }

    public function eliminarRol(){
        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarRol($_GET['id']);
        }
        header('Location: listarRoles');
    }

    
}