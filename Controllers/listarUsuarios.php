<?php

class ListarUsuarios extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function listarUsuarios(){
        $datos = array();

        $limiteRows = 10;
        $pagina = 1;
        if (isset($_GET['pagina'])) {

            if ($_GET['pagina']== 1) {
                header ('Location: listarUsuarios');
            }else {
                $pagina = $_GET['pagina'];
            }
        }else{
            $pagina = 1;
        }

        $inicio = ($pagina - 1) * $limiteRows;

        $totalRows = $this -> modelo ->contarUsuarios();
        
        $datos['totalPaginas'] = ceil($totalRows / $limiteRows);
        
        
        
        $datos['listadoUsuarios'] = $this -> modelo -> listarUsuarios($inicio,$limiteRows);
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }

    public function eliminarUsuario(){
        if (isset($_GET['id'])) {
            $this -> modelo -> desactivarUsuario($_GET['id']);
        }
        header('Location: listarUsuarios');
    }

    
}