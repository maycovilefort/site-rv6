<?php
require "phpmailer/PHPMailerAutoload.php";
require "phpmailer/class.phpmailer.php";
require "phpmailer/class.smtp.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$texto = "<h3>Dados Pessoais</h3>
		 Nome: ".$nome."
		 <br>E-mail: ".$email."
		 <br>Telefone: ".$telefone;

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

$mail->From = $email;
$mail->FromName = $nome;
$mail->addReplyTo($email, $nome);

$mail->addAddress("adrianmedeiros@outlook.com", "Adrian");

$mail->isHTML(true);
$mail->CharSet = "utf-8";
$mail->WordWrap = 70;

$mail->Subject = "Pedido de orçamento pelo Site - RV6";
$mail->Body = $texto;

$send = $mail->Send();

if($send)
{ echo "<div class='alert alert-success alert-dismissible' role='alert'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Enviado, aguarde nosso contato! </div>"; }
else
{ echo "<div class='alert alert-danger alert-dismissible' role='alert'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Erro - E-mail não enviado, ligue para (11) 3132-9486 </div>"; }																  
																	  
?>
