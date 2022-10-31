<?php

//aca se hacen las consultas a la base de datos
class ListarUsuariosModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function listarUsuarios($inicio,$limite){
        $consulta = "SELECT u.id, u.dni, u.nombre, u.apellidos, u.telefono, u.direccion, u.email, u.activo, r.nombre as rol, p.nombre as privilegio from usuarios u  
        INNER JOIN roles r
        on u.rol_id = r.id
        INNER JOIN privilegios p  
        on r.privilegios_id = p.id
        
        where u.eliminado = 0 ORDER BY id LIMIT $inicio,$limite" ;
                
        $resultado = $this -> seleccionarTodos($consulta);
       
        return $resultado;
    }
    public function contarUsuarios(){
        $consulta = "SELECT * from usuarios where eliminado = 0";
            $resultado = $this -> contar($consulta);
        return $resultado;
    }

    public function desactivarUsuario($id){
        $eliminado = 1;
        $consulta = "UPDATE usuarios set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }
    
    
}