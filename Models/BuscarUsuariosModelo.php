<?php

//aca se hacen las consultas a la base de datos
class BuscarUsuariosModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function getBusqueda($busqueda,$inicio,$limite){
        $consulta = "SELECT u.id, u.dni, u.nombre, u.apellidos, u.telefono, u.direccion, u.email, u.activo, r.nombre as rol, p.nombre as privilegio from usuarios u  
        INNER JOIN roles r
        on u.rol_id = r.id
        INNER JOIN privilegios p  
        on r.privilegios_id = p.id WHERE u.email LIKE '%".$busqueda."%' AND u.eliminado = 0 ORDER BY u.id LIMIT $inicio,$limite";
        $resultado = $this -> seleccionarTodos($consulta);
        return $resultado;
    }
    
    public function desactivarLibro($id){
        $eliminado = 1;
        $consulta = "UPDATE libros set eliminado = ? WHERE id = $id ";

            $arrayDatos = array($eliminado);
            $resultado = $this -> actualizar($consulta, $arrayDatos);
           
        
        return $resultado;
    }

    public function contarUsuariosBusqueda($busqueda){
        $consulta = "SELECT * FROM usuarios WHERE email LIKE '%".$busqueda."%' AND eliminado = 0";
        $resultado = $this -> contar($consulta);
        return $resultado;
    }

}