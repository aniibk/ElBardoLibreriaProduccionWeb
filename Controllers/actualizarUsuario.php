<?php

class ActualizarUsuario extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function actualizarUsuario(){
        $datos = array();      
        $id = null;  
        $datos['rol'] = $this -> modelo -> getRoles();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

        }
         $datos['usuario'] = $this -> modelo ->buscarUsuario($id);
        
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }
    
    public function updateUsuario(){
        
        if (isset($_POST['actualizar'])) {
            
            $id = $_POST['idUsuario'];
            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $email = $_POST['email'];
            $activo = isset($_POST['activo']);
            $clave = "";
            if ($_POST['usuario_clave_nueva_1']!= $clave) {
               $clave = $_POST['usuario_clave_nueva_1'];
            }
            $admin_email = $_POST['usuario_admin'];
            $admin_pass = $_POST['clave_admin'];
            //ver($_POST);
            $datos['admin'] = $this -> modelo ->buscarEmail($admin_email);
            //ver($datos);exit;   
            if (!empty($datos['admin'])) {
                $admin_pass = $this ->encrypt($_POST['clave_admin'],$datos['admin']['salt']);

                $rol_id = $_POST['usuario_privilegio'];
                if ($admin_email == $datos['admin']['email']& $admin_pass == $datos['admin']['pass'] ) {
                    if($clave !=""){
                        
                        $salt = $this -> modelo -> getSalt($id);
                    
                        $clave = $this -> encrypt($clave,$salt['salt']);
                        
                        $this -> modelo ->updateUsuario($id,$dni,$nombre,$apellido,$telefono,$direccion,$email,$clave,$rol_id,$activo);
                    }else{
                        $this -> modelo ->updateUsuarioSinPass($id,$dni,$nombre,$apellido,$telefono,$direccion,$email,$rol_id,$activo);
                        
                    }

                }else{
                    $datos['error']['usuario'] = "Usuario o Password incorrecto";
                }
            }else{
                $datos['error']['usuario'] = "Usuario o Password incorrecto";
            }
            
                
            

            

            $datos['rol'] = $this -> modelo -> getRoles();
            $datos['usuario'] = $this -> modelo ->buscarUsuario($id);
        }
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
        
    }


    private function encrypt($clave,$salt){
                
        $clave .= $salt;
        return hash('md5',$clave);
    }
    
   
}