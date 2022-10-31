<?php

class Saliendo extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function saliendo(){
        unset($_SESSION['usuario']);
        header('Location: admin');
        
    }

    // public function eliminarUsuario(){
    //     if (isset($_GET['id'])) {
    //         $this -> modelo -> desactivarUsuario($_GET['id']);
    //     }
    //     header('Location: listarUsuarios');
    // }

    
}