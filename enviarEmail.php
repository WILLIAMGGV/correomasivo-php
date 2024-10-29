<?php
$cliente = 'William Godoy';
$email = $_REQUEST["email"];
$asunto = $_REQUEST["asunto"];
$mensaje = $_REQUEST["mensaje"];

$destinatario = $email; //Quitamos algun espacion en blanco

$cuerpo = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Royal Insurance LLC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
      rel="stylesheet"
    />
    <style>
    .nunito-text {
      font-family: Nunito, sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
      color: #131c8f;
    }
    .nunito-text2 {
      font-family: Nunito, sans-serif;
      font-optical-sizing: auto;
      font-weight: 300;
      font-style: normal;
      color: #000;
      justify-content: center;
    }
    .nunito-text3 {
      font-family: Nunito, sans-serif;
      font-optical-sizing: auto;
      font-weight: 800;
      font-style: normal;
      color: #1242a8;
      padding-top: 20px;
      justify-content: center;
    }
    #contenedor {
      display: flex;
      justify-content: center;
    }
    #hijo {
      border-radius: 5px;
      padding: 20px;
      margin: 10px;
      width: 100%;
      background-color: beige;
      color: black;
    }
    .fondocc {
background-color: #ccc;
padding-top: 30px;
padding-bottom: 30px;
}
    body {
      background-color: #ccc;
    }
    .textoderecha {
      text-align: right;
      font-family: "Nunito", sans-serif;
      font-optical-sizing: auto;
      font-weight: 600;

      color: #131c8f;
      font-style: italic;
    }
  </style>
  </head>
  
  <body style="bg-color: #ccc">
  <div class="fondocc">
  <table width="70%" align="center">
<tr>
<td><div id="contenedor">
      <div id="hijo">
        <img
          src="https://royalinsurancellc.com/img/logo.png"
          width="150px"
          alt=""
        />
        <hr />
        <div style="font-family: Calibri, sans-serif; font-optical-sizing: auto; font-size: 24px;"><strong>' . $asunto . '</strong></div>
        <br />
        <div class="nunito-text2" style="font-family: Calibri, sans-serif; font-optical-sizing: auto; font-size: 18px;">
          ' . $mensaje . '
        </div>
        <div class="nunito-text3" style="font-family: Calibri, sans-serif; font-optical-sizing: auto; font-size: 20px;">
          <span style="color: #000">Atentamente.</span><br />
          Carmen Nieto Betancourt
        </div>
        <div class="textoderecha">
          <div><strong>Siguenos en</strong></div>
          <img
            src="https://royalinsurancellc.com/correomasivo/facebook.png"
            width="40px"
            alt=""
          />
          <img
            src="https://royalinsurancellc.com/correomasivo/instagram.png"
            width="40px"
            alt=""
          />
          <img
            src="https://royalinsurancellc.com/correomasivo/whatsapp.png"
            width="40px"
            alt=""
          />
        </div>
      </div>
    </div>
</td></tr></table>
    </div>
  </body>
</html>
';



//Cabecera Obligatoria
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Royal Insurance LLC <info@royalinsurancellc.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";

//OPCIONAR
$headers .= "Reply-To: ";
$headers .= "Return-path:";
$headers .= "Cc:";
$headers .= "Bcc:";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "20" . $email;
} else {
    echo "21";
}
