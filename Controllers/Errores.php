<?php
class Errores extends Controllers{
    public function __construct(){
        parent::__construct();
    }
    
    public function noEncontrado(){
        $this -> vista -> verVista($this,strtolower(get_class($this)),null);
    }

    
   
}
    $errores = new Errores();
    $errores -> noEncontrado();
?>
