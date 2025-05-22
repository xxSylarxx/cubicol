

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
// print_r($_POST);
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host       = 'correo.cubicol.com.pe';
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;
    $mail->CharSet = 'UTF-8';

    //Modificar
    //Recipients
    //$mail->setFrom('cubicol@cubicol.com.pe', 'CUBICOL');
    $mail->setFrom('cubicol@cubicol.com.pe');
    $mail->FromName = 'PAG. WEB';
    $mail->AddAddress('ventas@sensoft.com.pe', 'CUBICOL');
    // $mail->addAddress('ventas@sensoft.com.pe', 'CUBICOL');
    //$mail->addCC('lucasquirogafp@gmail.com'); -> inserte correo aquí

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'SOLICITUD DE CONSULTA VIA PAG.WEB';
    $mail->Body = '
        <h4><b>INFORMACION DE WEB</b></h4>
        <p><b> Nombre y Apellido : </b>' . $_POST['nombres'] . '</p>
        <p><b> Institución / Empresa : </b>' . $_POST['institucion'] . '</p>
        <p><b> Tipo de Institución / Empresa  : </b>' . $_POST['op1'] . '</p>
        <p><b> Celular  : </b>' . $_POST['celular'] . '</p>
        <p><b> Correo  : </b>' . $_POST['correo'] . '</p>
        <p><b> Como nos conociste  : </b>' . $_POST['op2'] . '</p>
        <p><b> Consulta : </b>' . $_POST['consulta'] . '</p>';
    if ($mail->Send()) {
        echo "SE ENVIO LA CONSULTA CORRECTAMENTE";
    }
} catch (Exception $e) {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}
