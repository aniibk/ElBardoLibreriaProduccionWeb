<?php

class BuscarComentario extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function BuscarComentario(){
        $datos = array();        
        
        if (isset($_GET['busqueda'])) {
           $datos['busqueda'] = $_GET['busqueda'];
           

           $limiteRows = 10;
           $pagina = 1;
           if (isset($_GET['pagina'])) {

                $pagina = $_GET['pagina'];
            }else{
               $pagina = 1;
           }
   
           $inicio = ($pagina - 1) * $limiteRows;
   
           ver($_GET);
           
           $opciones=$_GET['opt'];
           $totalRows = $this -> modelo ->contarComentariosBusqueda($opciones,$datos['busqueda']);
        
           
           $datos['totalPaginas'] = ceil($totalRows / $limiteRows);
           $datos['resultadoBusqueda'] = $this -> modelo ->getBusqueda($datos['busqueda'], $inicio, $limiteRows,$opciones);
           
        }

        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }

    public function eliminarLibro(){
        $datos = array();        

        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarLibro($_GET['id']);
        }
        header('Location: buscarLibro');
    }
   
   
}