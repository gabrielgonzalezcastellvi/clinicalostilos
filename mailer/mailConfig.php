<?php
// Datos de la cuenta de correo utilizada para enviar via SMTP
//SOPORTE: https://la.latincloud.com/986610-C%C3%B3mo-configurar-mi-Cloud-SMTP
$smtpHost = "mail.allesgutmendoza.com"; //smtp.clinicalostilos.com
$smtpUsuario = "no-reply@allesgutmendoza.com"; //no-responder@clinicalostilos.com
$smtpClave = "Lv!w%Twjn9eLF0A!BRn0&%7t"; //jq5ePqH0ltK7

$mailDestino = 'mecuevas81@gmail.com'; //destino del formulario de contacto: info@clinicalostilos.com

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465 ; //ó 587
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

$mail->Host = $smtpHost;
$mail->Username = $smtpUsuario;
$mail->Password = $smtpClave;
