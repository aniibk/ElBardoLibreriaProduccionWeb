<?php

class ActivarCamposModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarCamposProducto(){
        $consulta = "SELECT * from campos_dinamicos where eliminado = 0 and activo = 1 and tipo like 'p'";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    public function listarCamposActivosProducto($id){
        $consulta = "SELECT * from producto_campo_din where producto_id = $id and eliminado = 0";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    public function listarCamposComentarios(){
        $consulta = "SELECT * from campos_dinamicos where eliminado = 0 and activo = 1 and tipo <> 'p'";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function insertarCampoProducto($id_producto, $id_campo_dinamico){
        $consulta = "INSERT INTO producto_campo_din (producto_id, campo_din_id, activo) VALUES (?, ?, ?)";
        $arrayDatos = array($id_producto, $id_campo_dinamico, 1);

        $resultado = $this -> insertar($consulta, $arrayDatos);
    }

    public function desactivarCampo($idlibro,$idCampo){

    $consulta = "DELETE FROM producto_campo_din WHERE producto_id = $idlibro and campo_din_id = $idCampo";
        
            //$arrayDatos = array($idlibro,$idCampo);
            $resultado = $this -> eliminar($consulta);
           
    }
    
    

}