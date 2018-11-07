<?php
require "phpmailer/PHPMailerAutoload.php";
require "phpmailer/class.phpmailer.php";
require "phpmailer/class.smtp.php";

$email_news = $_POST["email_news"];

$texto = "E-mail para Newsletter: ".$email_news;

$mail = new PHPMailer();
$mail->setLanguage("pt");
$mail->isSMTP();
$mail->Host = "smtp.live.com";
$mail->SMTPAuth = true;
$mail->Username = "adrianmedeiros@outlook.com";
$mail->Password = "santosfc10!";
$mail->Port = 587;
$mail->SMTPDebug = 0;
$mail->SMTPSecure = "tls";

$mail->From = "adrianmedeiros@outlook.com";
$mail->FromName = "Adrian";
$mail->addReplyTo("adrianmedeiros@outlook.com", "Adrian");

$mail->addAddress("adrianmedeiros@outlook.com", "Adrian");

$mail->isHTML(true);
$mail->CharSet = "utf-8";
$mail->WordWrap = 70;

$mail->Subject = "Solicitação de newsletter Site - RV6";
$mail->Body = $texto;

$send = $mail->Send();

if($send)
{ echo "<div class='alert alert-success alert-dismissible' role='alert'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Cadastrado com sucesso! </div>"; }
else
{ echo "<div class='alert alert-danger alert-dismissible' role='alert'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Erro - E-mail não enviado, ligue para (11) 3132-9486 </div>"; }																  
																	  
?>
