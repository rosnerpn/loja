<?php
session_start();
require_once("PHPMailerAutoload.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

#email($nome,$email,$mensagem){

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host='servidor smtp';
$mail->Port= 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = "seu email";
$mail->SMTPAuth ="true";
$mail->Password = "sua senha";

$mail->setFrom("email de envio ","titulo do email");
$mail->addAddress("email para recebimento");
$mail->Subject = "titulo email";
$mail->msgHtml("<html>de: {$nome}<br>email: {$email}<br>mensagem: {$mensagem}</html>");
 

if($mail->send()){
	$_SESSION["success"]= "Enviado com sucesso!";
    header ("Location: index.php");
}else{
	$_SESSION["danger"]= "Enviado com sucesso!" . $mail->ErrorInfo;
    header("Location: contato.php");
}
    die();
    
    ?>