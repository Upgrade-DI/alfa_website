<?php

if ((isset($_POST["MMinsert"])) && ($_POST["MMinsert"] == "runContacto")) {
        $nombre = $_POST['name'];
        $telefono = $_POST['phone'];
        $mail = $_POST['email'];
        $fecha = $_POST['birthdate'];
        $edad = $_POST['age'];
        $mensaje = $_POST['message'];


        $mailHeader = "From: " . $mail . " \r\n";
        $mailHeader .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $mailHeader .= "Mime-Version: 1.0 \r\n";
        $mailHeader .= "Content-Type: text/html; charset=utf-8";
       //Cambiar correo dependiendo del Cliente
        $mailHeader2 = "From: contacto@alfa.com\r\n";
        $mailHeader2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $mailHeader2 .= "Mime-Version: 1.0 \r\n";
        $mailHeader2 .= "Content-Type: text/html; charset=utf-8";

        // Contactos a enviar el correo
        $para = 'leisly@upgrade.com.mx';//
    
        // Incluir los estilos
        include_once("correo/style.php");
        include_once("correo/myStyle.php");
        // Incluir Header y Footer
        include_once('correo/correo_h&f.php');
        // Contenido del mensaje enviado al usuario y al administrador
        include_once('correo/correo_contenido.php');
        // Función que crea toda la estructura del correo
        include_once("correo/correo.php");

        // Correo al Administrador
        $mailContentAdmin = mailContent($myStyle,$mensaje_admin);
        mail($para, "Contacto desde sitio web", $mailContentAdmin, $mailHeader);

        // Correo al Usuario
        $mailContentUser = mailContent($myStyle, $mensaje_usuario);
        mail($mail, "Contacto ALFA", $mailContentUser, $mailHeader2);

        header("Location: contacto.php?message=ok"); // Redirección + variable
        exit;
    }

?>
