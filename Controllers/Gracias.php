<?php

class Gracias extends Controllers{
    public function __construct(){
        parent::__construct();

    }

    public function gracias(){
        $mifecha="";
      
        $datosEnviados = isset($_POST) ? $_POST : "";
        
        if (!empty($datosEnviados)) {
            $this -> modelo -> insertarConsultaUsuario($datosEnviados['Nombre'],$datosEnviados['Apellido'],$datosEnviados['mail'],$datosEnviados['telefono'],$datosEnviados['Asunto'],$datosEnviados['Area'],$datosEnviados['Mensaje']);
            $this -> modelo -> enviarMail($datosEnviados['Nombre'],$datosEnviados['Apellido'],$datosEnviados['mail'],$datosEnviados['Asunto'],$datosEnviados['Area'],$datosEnviados['Mensaje']);
                  
       
       
        }
        $datosEnviados =isset($_GET) ? $_GET : "";
        // ver($datosEnviados['radio']);
        
        if (isset($datosEnviados['insertComentario'])) {
            $estado = false;
            $mifecha = date('Y-m-d H:i:s');
            $ultimoInsert = $this -> modelo -> insertarComentario($datosEnviados['banner'],$datosEnviados['mail'],$datosEnviados['comentario'],$mifecha,$datosEnviados['valoracion'],$estado);
            $campoId = '';
            $campoValor = '';
            if (isset($datosEnviados['radio'])) {
                foreach ($datosEnviados['radio'] as $key => $value) {
                    $campoId = $key;
                    $campoValor = $value;
                    $this -> modelo -> insertarCampoDinamicoComentario($ultimoInsert, $campoId, $campoValor);
                }
                
            }
            if (isset($datosEnviados['seleccion'])) {
                foreach ($datosEnviados['seleccion'] as $key => $value) {
                    $campoId = $key;
                    $campoValor = $value;
                    $this -> modelo -> insertarCampoDinamicoComentario($ultimoInsert, $campoId, $campoValor);
                }
            }
            if (isset($datosEnviados['textarea'])) {
                foreach ($datosEnviados['textarea'] as $key => $value) {
                    $campoId = $key;
                    $campoValor = $value;
                    $this -> modelo -> insertarCampoDinamicoComentario($ultimoInsert, $campoId, $campoValor);
                }
            }
            if (isset($datosEnviados['cbox'])) {
                foreach ($datosEnviados['cbox'] as $key => $value) {
                    $campoId = $key;
                    $campoValor = "";
                    $campoValor=implode("|", $value);
                    $this -> modelo -> insertarCampoDinamicoComentario($ultimoInsert, $campoId, $campoValor);
                }
            }
        }
        if (isset($datosEnviados['insertNeswletter'])) {
            $mail = $this -> modelo -> buscarEmail($datosEnviados['email']);
            if(empty($mail)){
                $this -> modelo -> insertarNewsletterUsuario($datosEnviados['email']);
                
            }
        }
        
              
        $datos = array();
        $this -> vista -> verVista($this,"gracias", $datos);
    }

    


}