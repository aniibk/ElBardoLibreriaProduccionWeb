<?php

class listarLibros extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function listarLibros(){
        $datos = array();
    
        $limiteRows = 10;
        $pagina = 1;
        if (isset($_GET['pagina'])) {

            if ($_GET['pagina']== 1) {
                header ('Location: listarLibros');
            }else {
                $pagina = $_GET['pagina'];
            }
        }else{
            $pagina = 1;
        }

        $inicio = ($pagina - 1) * $limiteRows;

        $totalRows = $this -> modelo ->contarLibros();
        
        $datos['totalPaginas'] = ceil($totalRows / $limiteRows);
        
        
        
        $datos['listadoLibros'] = $this -> modelo -> listarLibrosModelo($inicio,$limiteRows);
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }

    public function eliminarLibro(){
        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarLibro($_GET['id']);
        }
        header('Location: listarLibros');
    }

    
}