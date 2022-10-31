<?php

//aca se hacen las consultas a la base de datos
class AdminModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function buscarUsuario($id){
        $consulta = "SELECT u.*, r.nombre as nombreRol, p.nombre as privilegioNombre, p.nivel_acceso as nivel from usuarios u  
        INNER JOIN roles r
        on u.rol_id = r.id
        INNER JOIN privilegios p  
        on r.privilegios_id = p.id  WHERE u.id = $id";
       
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }
    public function buscarEmail($email){
        $consulta = "SELECT u.*, r.nombre as nombreRol, p.nombre as privilegioNombre, p.nivel_acceso as nivel from usuarios u  
        INNER JOIN roles r
        on u.rol_id = r.id
        INNER JOIN privilegios p  
        on r.privilegios_id = p.id  where u.email LIKE '$email'";
       
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }
    public function getRoles(){
        $consulta = "SELECT * FROM ".DBNAME.".roles WHERE activo = 1 ORDER by nombre ASC";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    public function getSalt($id){
        $consulta = "SELECT salt FROM ".DBNAME.".usuarios WHERE id = $id";
        $resultado = $this -> seleccionar($consulta);
        return $resultado;
    }
    public function updateUsuario($id,$dni,$nombre,$apellido,$telefono,$direccion,$email,$clave,$rol_id,$activo){
        $consulta = "UPDATE usuarios set dni = ?, nombre = ?, apellidos = ?, telefono = ?, direccion = ?, email = ?,pass = ?, rol_id = ?, activo = ? WHERE id = $id ";
        $arrayDatos = array($dni,$nombre,$apellido,$telefono,$direccion,$email,$clave,$rol_id,$activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    public function updateUsuarioSinPass($id,$dni,$nombre,$apellido,$telefono,$direccion,$email,$rol_id,$activo){
        $consulta = "UPDATE usuarios set dni = ?, nombre = ?, apellidos = ?, telefono = ?, direccion = ?, email = ?, rol_id = ?, activo = ? WHERE id = $id ";
        
        $arrayDatos = array($dni,$nombre,$apellido,$telefono,$direccion,$email,$rol_id,$activo);
        $resultado = $this -> actualizar($consulta, $arrayDatos);
        return $resultado;
    }
    

}