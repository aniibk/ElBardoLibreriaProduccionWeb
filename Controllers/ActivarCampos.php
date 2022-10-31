<?php

class ActivarCampos extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function activarCampos(){
        $id = $_GET['id'];
        $datos = array();
        $datos['listadoCamposProducto'] = $this -> modelo -> listarCamposProducto();
        $datos['listadoCamposcomentarios'] = $this -> modelo -> listarCamposComentarios();
        $datos['camposActivosProducto']= $this -> modelo -> listarCamposActivosProducto($id);
        $this -> vista -> verVista($this,strtolower(get_class($this)), $datos);
        
    }


    public function activarCampoProducto(){
        $idCampoNuevo = $_GET['idCampo'];
        $idProducto = $_GET['idLibro'];
        
        $this -> modelo -> insertarCampoProducto($idProducto , $idCampoNuevo);
        $datos['listadoCamposProducto'] = $this -> modelo -> listarCamposProducto();
        $datos['listadoCamposcomentarios'] = $this -> modelo -> listarCamposComentarios();

        $datos['camposActivosProducto']= $this -> modelo -> listarCamposActivosProducto($idProducto);
        
        header("Location: activarCampos?id=$idProducto");
        
    }

    public function eliminarCampo(){
        $idProducto = $_GET['idlibro'];
        $idCampo= $_GET['idCampo'];
        
            $this -> modelo -> desactivarCampo($idProducto, $idCampo);
      
        header("Location: activarCampos?id=$idProducto");
    }

    
}