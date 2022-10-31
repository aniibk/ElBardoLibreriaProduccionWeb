<?php

class AgregarUsuario extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function agregarUsuario(){
        $datos = array();        
        $datos['rol'] = $this -> modelo -> getRoles();
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }

    public function agregaUsuario(){
        
       
        $pila_ids = $this -> modelo -> lastId();
        
        $id = 0;
        foreach ($pila_ids as $key => $value) {
            foreach ($value as $key => $val) {
                if($val > $id){
                    $id = $val;
                }
            }
        }
        
        $url=explode("/",BASE_URL);
        $carpetaUrl = "";
            foreach ($url as $key => $value) {
                if($value != ""){
                    $carpetaUrl = $value;
                }
            }
        
        
        
        if (isset($_POST['insertar'])) {
            
            $dni = $_POST['usuario_dni'];
            $nombre = $_POST['usuario_nombre'];
            $apellido = $_POST['usuario_apellido'];
            $telefono = $_POST['usuario_telefono'];
            $direccion = $_POST['usuario_direccion'];
            $email = $_POST['usuario_email'];
            $clave = $_POST['usuario_clave_1'];
            $rol_id = $_POST['usuario_privilegio'];
            $salt = random_int(0,9999999);
            $clave = $this -> encrypt($clave,$salt);
            $ultimoID = $id+1;
            $imagen = "";


            if(isset($_FILES)){
                if($_FILES['imagenPerfil']['type'] == "image/jpeg" | $_FILES['imagenPerfil']['type'] == "image/jpg" | $_FILES['imagenPerfil']['type'] == "image/png" ){
                    
                    $nombreImagen = $ultimoID . "_avatar.";
                    $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] ."/". $carpetaUrl ."/assets/img/avatar/users/"; 
                    if (!file_exists($carpetaDestino.$ultimoID)) {
                        
                        $extension = explode("/",$_FILES['imagenPerfil']['type']);
                        mkdir($carpetaDestino.$ultimoID,0777);
                        $rutaArchivo = $carpetaDestino . $ultimoID . "/" . $nombreImagen;
                        
                        move_uploaded_file($_FILES['imagenPerfil']['tmp_name'],$rutaArchivo.$extension[1]);
                        $imagen = "assets/img/avatar/users/" .$ultimoID."/". $nombreImagen.$extension[1];
                        
                    }
                    
                }else{
                    ver("error");exit;
                }
                
            }

            
            
            $this -> modelo ->insertaUsuario($dni,$nombre,$apellido,$telefono,$direccion,$email,$clave,$imagen,$salt,$rol_id);
        }
        header("location: agregarUsuario");
    
    }
   




    private function encrypt($clave,$salt){

        $clave .= $salt;
        return hash('md5',$clave);
    }
}