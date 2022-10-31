<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

//aca se hacen las consultas a la base de datos
class GraciasModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    

    
    public function insertarConsultaUsuario($nombre,$apellido,$email,$telefono,$asunto,$para,$mensaje){
        $consulta = "INSERT INTO ".DBNAME.".consultas (nombre,apellidos,email,telefono,asunto,para,mensaje) values(?,?,?,?,?,?,?)";
        $ArrayValores = array($nombre,$apellido,$email,$telefono,$asunto,$para,$mensaje);
        $respuesta = $this -> insertar($consulta, $ArrayValores);
        
        return $respuesta;
    }
    public function insertarComentario($idLibro,$mail,$comentario,$fecha,$valoracion,$activo){
        $consulta = "INSERT INTO ".DBNAME.".comentarios (libro_id,email,descripcion,fecha,valoracion,activo) values(?,?,?,?,?,?)";
        $ArrayValores = array($idLibro,$mail,$comentario,$fecha,$valoracion,$activo);
        $respuesta = $this -> insertar($consulta, $ArrayValores);
        return $respuesta;
    }
    public function insertarNewsletterUsuario($email){
        $consulta = "INSERT INTO ".DBNAME.".newsletter (email) values(?)";
        $ArrayValores = array($email);
        $respuesta = $this -> insertar($consulta, $ArrayValores);
        return $respuesta;
    }
    public function buscarEmail($email){
        $consulta = "SELECT * FROM newsletter WHERE email = '$email'";
        $respuesta = $this -> seleccionar($consulta);
        return $respuesta;
    }
    public function insertarCampoDinamicoComentario($ultimoInsert, $idCampoDinamico, $valor){
        $consulta = "INSERT INTO ".DBNAME.".comentario_dinam (comentario_id,campo_din_id,valor) values(?,?,?)";
        $ArrayValores = array($ultimoInsert, $idCampoDinamico, $valor);
        $respuesta = $this -> insertar($consulta, $ArrayValores);
    }

    public function enviarMail($nombre, $apellido, $email, $titulo, $area, $mensaje)
    {

        $mail = new PHPMailer();
        $mail->IsSMTP();   // set mailer to
        $mail->SMTPAuth = true;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = 'smtp.gmail.com';  // specify main and backup server
        $mail->SMTPAuth = true;     // activa autenticacion SMTP
        $mail->Username = "elbardolibreria@gmail.com";  // usuario SMTP
        $mail->Password = "tpdavincilibreria"; // contraseña SMTP

        $mail->From = "elbardolibreria@gmail.com";
        $mail->FromName = $nombre." " . $apellido; // remitente
        
        $mail->AddAddress("elbardolibreria@gmail.com", $area);        // destinatario
        $mail->AddReplyTo($email, $nombre, $apellido);  // responder a
        
        $mail->Port = 587; //puerto de salida
        $mail->SMTPSecure = 'tls'; //Definmos la seguridad como TLS
        $mail->SMTPAuth = true; //Tenemos que usar gmail autenticados, así que esto a TRUE
        $mail->WordWrap = 50;     // set word wrap to 50 characters
        $mail->IsHTML(true);     // set email

        $mail->Subject = $titulo;
        $mail->Body    = $mensaje;
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

        if (!$mail->Send()) {
            echo "Message could not be sent. <p>";
            echo "Mailer Error: " . $mail->ErrorInfo;
            header('Location: gracias');
            exit;
        }


    }


}