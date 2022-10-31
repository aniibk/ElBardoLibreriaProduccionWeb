<?php

class listarComentarios extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function listarComentarios(){
        $datos = array();

        $limiteRows = 10;
        $pagina = 1;
        if (isset($_GET['pagina'])) {
            
            $pagina = $_GET['pagina'];
            
        }else{
            $pagina = 1;
        }

        $inicio = ($pagina - 1) * $limiteRows;

        $totalRows = $this -> modelo ->contarComentarios();
        
        $datos['totalPaginas'] = ceil($totalRows / $limiteRows);

        $datos['listadoComentarios'] = $this -> modelo -> listarComentarios($inicio, $limiteRows);
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }

    // public function eliminarLibro(){
    //     if (isset($_GET['id'])) {
    //         $this -> modelo -> desactivarLibro($_GET['id']);
    //     }
    //     header('Location: listarLibros');
    // }

    
}