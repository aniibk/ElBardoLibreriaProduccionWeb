<?php

class AgregarUsuarioModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    public function getRoles(){
        $consulta = "SELECT * FROM ".DBNAME.".roles WHERE activo = 1 ORDER by nombre ASC";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function insertaUsuario($dni,$nombre,$apellido,$telefono,$direccion,$email,$clave,$imagen,$salt,$rol_id){
        $consulta = "INSERT INTO usuarios (dni, nombre, apellidos, telefono, direccion, email, pass, imagen, salt, rol_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $arrayDatos = array($dni,$nombre,$apellido,$telefono,$direccion,$email,$clave,$imagen,$salt,$rol_id);

        $resultado = $this -> insertar($consulta, $arrayDatos);
    }

    public function lastId(){
        $consulta = "SELECT id FROM usuarios ORDER BY id DESC";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
   
}