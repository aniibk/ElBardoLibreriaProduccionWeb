<?php

class agregarCampos extends Controllers{
    public function __construct(){
        parent::__construct();

        
        
    }
    

    public function agregarCampos(){
        $datos = array();               
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }

    public function insertaCampo(){
        $datos = array();
        if (isset($_POST['insertar'])) {

            $nombre = $_POST['nombre'];
            $opciones = $_POST['opciones'];
            $tipo = $_POST['tipo'];
            $activo = isset($_POST['activo']);
            

            $this -> modelo ->insertCampo($nombre, $opciones, $tipo, $activo);

            

        }
        $this -> vista -> verVista($this,strtolower(get_class($this)),$datos);
    }

    //     ver($_POST);
    //     ver($_FILES);

    //     $pila_ids = $this -> modelo -> lastId();
        
    //     $id = 0;
    //     foreach ($pila_ids as $key => $value) {
    //         foreach ($value as $key => $val) {
    //             if($val > $id){
    //                 $id = $val;
    //             }
    //         }
    //     }
    //     $url=explode("/",BASE_URL);
    //     $carpetaUrl = "";
    //         foreach ($url as $key => $value) {
    //             if($value != ""){
    //                 $carpetaUrl = $value;
    //             }
    //         }
    
    //     ver($id . " ultimo id");
    //     ver($carpetaUrl . " carpeta url");

    //     if (isset($_POST['insertar'])) {
            
    //         $editorial_id = $_POST['editorial'];
    //         $genero_id = $_POST['genero'];
    //         $nombre = $_POST['titulo'];
    //         $descripcion = $_POST['descripcion'];
    //         $precio = $_POST['precio'];
    //         $destacado = isset($_POST['destacado']);
    //         $fecha = date('Y-m-d H:i:s');
    //         $activo = isset($_POST['activo']);
    //         $urlImagenPortada = "";
    //         $urlImagenBanner = "";

    //         $ultimoID = $id+1;
            
    //         if(isset($_FILES)){

    //             if($_FILES['imágenes']['type'][0] == "image/jpeg" | $_FILES['imágenes']['type'][0] == "image/jpg" | $_FILES['imágenes']['type'][0] == "image/png" &&
    //              $_FILES['imágenes']['type'][1] == "image/jpeg" | $_FILES['imágenes']['type'][1] == "image/jpg" | $_FILES['imágenes']['type'][1] == "image/png"){
    //                 echo "hay imagenes jpg";
    //                 $nombreImagenPortada = $ultimoID . "_mini.";
    //                 $nombreImagenBanner = $ultimoID . "_banner.";
    //                 $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] ."/". $carpetaUrl ."/assets/img/productos/"; 
    //                 $extensionPortada = explode("/",$_FILES['imágenes']['type'][0]);
    //                 $extensionBanner = explode("/",$_FILES['imágenes']['type'][1]);

    //                 ver($carpetaDestino);
    //                 ver($fecha);
    //                 if (!file_exists($carpetaDestino.$ultimoID)) {
    //                     mkdir($carpetaDestino.$ultimoID,0777);
    //                     $rutaArchivo1 = $carpetaDestino . $ultimoID . "/" . $nombreImagenPortada;
    //                     $rutaArchivo2 = $carpetaDestino . $ultimoID . "/" . $nombreImagenBanner;
    //                     move_uploaded_file($_FILES['imágenes']['tmp_name'][0],$rutaArchivo1.$extensionPortada[1]);
    //                     move_uploaded_file($_FILES['imágenes']['tmp_name'][1],$rutaArchivo2.$extensionBanner[1]);
    //                     $urlImagenPortada = "assets/img/productos/". $ultimoID . "/". $nombreImagenPortada.$extensionPortada[1];
    //                     $urlImagenBanner =  "assets/img/productos/" . $ultimoID . "/". $nombreImagenBanner.$extensionBanner[1];
    //                     ver($urlImagenPortada);
    //                     $this -> modelo ->insertaLibro($editorial_id,$genero_id,$nombre,$descripcion,$precio,$destacado,$fecha,$urlImagenPortada,$urlImagenBanner,$activo);
    //                 }
    //                 header("location: agregarLibro");
    //             }else{
    //                 echo "alguna imagen no es jpg";
    //             }
    //         }
            



    //     }
    // }
   
}