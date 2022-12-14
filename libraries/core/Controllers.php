<?php

class Controllers{
    public function __construct(){
        $this -> vista = new Views();
        $this -> cargaModelos();
    }

    public function cargaModelos(){
        
        $modelo = get_class($this)."Modelo";
       
        $rutaClase = "Models/" . $modelo . ".php";
        
        if (file_exists($rutaClase)) {
            require_once($rutaClase);
            $this->modelo = new $modelo();
        }
    }

}

