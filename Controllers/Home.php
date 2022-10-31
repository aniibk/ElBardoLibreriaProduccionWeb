<?php
class Home extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function home(){
        $datos = array();
            $librosDestacados = $this -> modelo -> obtenerDestacados();
            $todosLosComentarios = $this -> modelo -> obtenerComentariosActivosTotales();
            
            
           
        $parametros['librosDestacados'] = $librosDestacados;
        $parametros['todosLosComentarios'] = $todosLosComentarios;
        
        $this -> vista -> verVista($this,strtolower(get_class($this)), $parametros);
        
    }

    
}