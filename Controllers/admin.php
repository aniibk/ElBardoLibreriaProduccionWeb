<?php

class Admin extends Controllers{
    public function __construct(){
        parent::__construct();

    }
    

    public function admin(){
        $datos = array();
        $usuario = isset($_POST['usuario']) ?$_POST['usuario']:"" ;
        $clave = isset($_POST['clave']) ?$_POST['clave']:"" ;
        
        
        
            
            if (!empty($usuario) & !empty($clave)) {
                //busca usuario email
                $datos['login'] = $this -> modelo ->buscarEmail($usuario);
                if (!empty($datos['login'])) {
                    $salt = $this -> modelo -> getSalt($datos['login']['id']);
                    
                
                    $clave = $this -> encrypt($clave,$salt['salt']);
                
                    if ($clave == $datos['login']['pass']&& $usuario==$datos['login']['email']) {
                            //guardar aca la sesion de login
                            //session_start();
                            $_SESSION['usuario'] = $datos['login'];
                            header("location: dashboard");
                    
                    }else{
                        //si las credenciales no coinciden
                        $datos['error']['usuario'] = "Usuario o Password incorrecto";
                        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
                
                    }
                }else{
                    //si las credenciales no coinciden
                    $datos['error']['usuario'] = "Usuario o Password incorrecto";
                    $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
            
                }
        }
        //login vacio ok!!
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }


    private function encrypt($clave,$salt){
                
        $clave .= $salt;
        return hash('md5',$clave);
    }
}