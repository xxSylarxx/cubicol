<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// print_r($_POST);


if (!empty($_POST)) {
    $objmail = new PHPMailer();
    $objmail->CharSet = 'UTF-8';
    $objmail->IsHTML(true);
    $objmail->isSMTP();
    $objmail->SMTPDebug  = false;
    $objmail->SMTPSecure = '';
    $objmail->Host = 'correo.cubicol.com.pe';
    $objmail->SMTPAuth = false;
    $objmail->Port = 25;
    // $objmail->From = 'correo.cubicol@cubicol.com.pe';
    $objmail->From = 'cubicol@cubicol.com.pe';
    $objmail->FromName = 'CUBICOL';
    // $objmail->AddAddress('luismiguel.tm7@gmail.com', 'CUBICOL');
    $objmail->AddAddress('ventas@sensoft.com.pe', 'CUBICOL');
    // $objmail->AddAddress('karina.coordinacionweb@gmail.com', 'CUBICOL');
    // die("punto7");
    // $objmail->addCC('luismiguel.tm7@gmail.com', 'CUBICOL');
    $objmail->Subject = 'SOLICITUD DE CONSULTA VIA PAG.WEB';
    $objmail->Body = '
        <h4><b>INFORMACION DE WEB</b></h4>
        <p><b>Nombre : </b>' . $_POST['nombre'] . '</p>
        <p><b>Correo : </b>' . $_POST['correo'] . '</p>';
    if ($objmail->Send()) {
        echo "SU CONSULTA FUE ENVIADA CORRECTAMENTE";
    } else {
        // echo $objmail->ErrorInfo;
        echo 'OCURRIO UN ERROR, NO SE PUDO PROCESAR EL ENVIO';
    }
}
