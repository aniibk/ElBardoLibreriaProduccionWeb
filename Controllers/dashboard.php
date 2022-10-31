<?php
class Dashboard extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function dashboard(){
        $datos = array();
        if (!isset($_SESSION['usuario'])) {
            header('Location: admin');
        }
       
            // $librosDestacados = $this -> modelo -> obtenerDestacados();
            // $todosLosComentarios = $this -> modelo -> obtenerComentariosActivosTotales();
        $datos['CantidadLibros'] = $this -> modelo -> cuentaTodosRegistros('libros'); 
        $datos['CantidadEditoriales'] = $this -> modelo -> cuentaTodosRegistros('editoriales'); 
        $datos['CantidadGeneros'] = $this -> modelo -> cuentaTodosRegistros('generos'); 
        $datos['CantidadComentarios'] = $this -> modelo -> cuentaTodosRegistros('comentarios'); 
        $datos['CantidadUsuarios'] = $this -> modelo -> cuentaTodosRegistros('usuarios'); 
        $datos['CantidadRoles'] = $this -> modelo -> cuentaTodosRegistros('roles');
        $datos['CantidadCampos'] = $this -> modelo -> cuentaTodosRegistros('campos_dinamicos'); 



        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }

    
}