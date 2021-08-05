<?php

if(!isset($_POST['form-email']))
    header('Location: index.php');


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-pt.securemail.pro';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@brunofrsantos.pt';                     //SMTP username
    $mail->Password   = 'brSan+0s';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admin@brunofrsantos.pt', 'Site Form');
    $mail->addAddress('admin@brunofrsantos.pt');     //Add a recipient


    $nome = $_POST['form-nome'];
    $email = $_POST['form-email'];
    $assunto = $_POST['form-assunto'];
    $mensagem = $_POST['form-mensagem'];


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $assunto;
    $mail->Body    = 'De: '.$nome.' ('.$email.') <br><br>Assunto: '.$assunto.'<br><br>Mensagem: '.$mensagem;
    $mail->AltBody = 'De: '.$nome.' ('.$email.')     Assunto: '.$assunto.'        Mensagem: '.$mensagem;

    $mail->send();
    header('Location: index.php?p=contacto&result=ok');
} catch (Exception $e) {
    header('Location: index.php?p=contacto&result=error');
}

?>