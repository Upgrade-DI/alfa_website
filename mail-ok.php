<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'on');

    include_once("Connections/config.php");  
    include_once('correo/class.phpmailer.php');

    if(isset($_POST['email'])) {

        // $rootPath = "https://upgrade.red/alfa2/";

        // Aquí se deberían validar los datos ingresados por el usuario
        if(!isset($_POST['name']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['birthdate']) ||
        !isset($_POST['age']) ||
        !isset($_POST['message']) 
        ){

        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
        die();
        }

        // Mensaje que recibira el administrador de la cuenta

        $email_admin = '

            <style type="text/css">

                * { font-family: sans-serif; }
                table {width:75%; color:black; margin: auto; text-align: center;}
                td{background-color: white;}
                th {background-color:#afafc7; color:#FFF;}
                .title { color:#284259; font-size:24px; font-family: sans-serif}
                .description { color:black; font-size: 16px; font-family: sans-serif; }
                td.logo img {padding: 10px 0px; width: 200px; border: 1px solid #edf0f2; width: 100%; display:flex; align-items:center; justify-content:center; background-color: #F16430;}

                table.sudi_table { margin-bottom:30px; width:100%; }
                tbody.sudi_tbody tr td { padding:4px; text-align:center; }
                tbody.sudi_tbody td { border: 0; }

                .sudi_border { border:#edf0f2 solid thick; }
                .sudi_border sub{font-size: 16px; font-family: sans-serif;}
                .sudi_border .subP{color:#284259; font-family:  sans-serif; font-weight: 600;}
                .stylebuttonmail {color: white; text-decoration: none; background-color: #284259; border-radius: 4px; width: fit-content; margin: 30px auto; padding: 10px 30px; font-size: 14px;}
                .footer {font-family: sans-serif; text-align:center; font-size: 14px;}
                .styledesc {padding: 40px 30px; border-right:1px solid #edf0f2; border-bottom:1px solid #edf0f2; border-left:1px solid #edf0f2; font-family: "Config-Regular"; background-size:contain; background-repeat:no-repeat; background-position:center bottom; text-align: center !important; display: flex; flex-direction: column; justify-content: center;}
                .styledesc2{padding: 40px 30px; border-right:1px solid #edf0f2; border-bottom:1px solid #edf0f2; border-left:1px solid #edf0f2; font-family: "Config-Regular"; background-size:contain; background-repeat:no-repeat; background-position:center bottom; text-align: center !important; display: flex; flex-direction: column; justify-content: center; box-sizing: border-box;}

                td.c1x, th.c1x { width: 100%; font-size:.9em;}
                td.c2x, th.c2x { width: 50%; font-size:.9em;}
                td.c3x, th.c3x { width: 33%; font-size:.9em;}
                td.c4x, th.c4x { width: 25%; font-size:.9em;}
                td.c5x, th.c5x { width: 20%; font-size:.9em;}


                @media only screen and (max-width: 750px) {
                    table {width: 80%;}
                    table.container { width:98%; }
                    td.logo img { display:none; }
                    td.logo { background-image: url("'.$rootPath.'_images/_svg/logo.svg"); background-size:contain; background-repeat:no-repeat; background-position:center; height:50px; background-color: white;}
                    .styledesc {padding: 0;}
                    .sudi_border sub {font-size: 12px;}
                    td { width:100% !important; }
                    .title {font-size: 18px; width: 70%; margin: 25px auto 0;} 
                    .description {font-size:14px;}
                    .p_content { text-align:left; font-size:.9em; margin:0px; }
                    
                    .footer{ font-size:.7em !important; }
                    tbody.sudi_tbody tr { display:flex; flex-direction:column;}
                    tbody.sudi_tbody tr td:last-child { border-bottom:#afafc7 2px solid; margin-bottom:4px; }
                    td.c1x, th.c1x, td.c2x, th.c2x, td.c3x, th.c3x, td.c4x, th.c4x, td.c5x, th.c5x { width:100%; display:block; box-sizing: border-box; }
                .img { width: 80px; height:auto; border-radius:50%; overflow:hidden; }
                }
            
            </style>

            <div style="height:50px; color:#FFF;"></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f5f8fa">
            <tbody>
            <tr>
            <td>
            <table class="container" align="center" border="0" cellpadding="0" cellspacing="0">
            <!--  H E A D E R -->
            <tbody> 
            <tr>
            <td valign="top" class="logo" style="text-align: center;border-bottom: none;width: 493px;">
            <img id="main_logo" src="'.$rootPath.'_images/_svg/logo.svg" alt="Logo " width="100px" height="60px" border="0">
            </td>
            </tr>
            <!--P R I N C I P A L -->
            <tr>
            <td valign="top" class="styledesc" bgcolor="#FFFFFF"; width: 80% !important; >

            <h1 class="title">Contacto ALFA</h1>
            <p class="description">El siguiente usuario se ha contactado desde el sitio web</p>

            <table class="sudi_table" style="display: flex; justify-content: center; align-items: center;"><tbody class="sudi_tbody">

            <tr style="text-align:center">
            <td class="c5x sudi_border"><sub class="subP">Nombre:</sub><br></td>
            <td class="c5x sudi_border"><sub>'. $_POST['name'] .'</sub><br></td>
            </tr>
            <tr style="text-align:center">
            <td class="c5x sudi_border"><sub class="subP">Correo electrónico:</sub><br></td>
            <td class="c5x sudi_border"><sub>'. $_POST['email'] .'</sub><br></td>
            </tr>
            <tr style="text-align:center">
            <td class="c5x sudi_border"><sub class="subP">Teléfono:</sub><br></td>
            <td class="c5x sudi_border"><sub>'. $_POST['phone'] .'</sub><br></td>
            </tr>
            <tr style="text-align:center">
            <td class="c5x sudi_border"><sub class="subP">Fecha de nacimiento:</sub><br></td>
            <td class="c5x sudi_border"><sub>'. $_POST['birthdate'] .'</sub><br></td>
            </tr>
            <tr style="text-align:center">
            <td class="c5x sudi_border"><sub class="subP">Edad:</sub><br></td>
            <td class="c5x sudi_border"><sub>'. $_POST['age'] .'</sub><br></td>
            </tr>
            <tr style="text-align:center">
            <td class="c5x sudi_border"><sub class="subP">Mensaje:</sub><br></td>
            <td class="c5x sudi_border"><sub>'. $_POST['message'] .'</sub><br></td>
            </tr>
            </table>

            </td>
            </tr> <!--P R I N C I P A L [END] --> 
            <!-- F O O T E R --> 
            <tr>
            <td valign="top" class="footer">ALFA </sup> | 2024
            </tr>
            </tbody></table>
            </td>
            </tr>
            </tbody></table>
        ';


        $email_message = '

            <style type="text/css">

                * { font-family: sans-serif; }
                table {width:75%; color:black; margin: auto; text-align: center;}
                td{background-color: white;}
                th {background-color:#afafc7; color:#FFF;}
                .title { color:#284259; font-size:24px; font-family: sans-serif;}
                .description { color:black; font-size: 16px; font-family: sans-serif; }
                td.logo img {padding: 10px 0px; width: 200px; border: 1px solid #edf0f2; width: 100%; display:flex; align-items:center; justify-content:center; background-color: #F16430;}

                table.sudi_table { margin-bottom:30px; width:100%; }
                tbody.sudi_tbody tr td { padding:4px; text-align:center; }
                tbody.sudi_tbody td { border: 0; }

                .sudi_border { border:#edf0f2 solid thick; }
                .sudi_border sub{font-size: 16px; font-family: sans-serif;}
                .sudi_border .subP{color:#284259; font-family: sans-serif; font-weight: 600;}
                .stylebuttonmail {color: white; text-decoration: none; background-color: #284259; border-radius: 4px; width: fit-content; margin: 30px auto; padding: 10px 30px; font-size: 14px;}
                .footer {font-family: sans-serif; text-align:center; font-size: 14px;}
                .styledesc {padding: 40px 30px; border-right:1px solid #edf0f2; border-bottom:1px solid #edf0f2; border-left:1px solid #edf0f2; font-family: "Config-Regular"; background-size:contain; background-repeat:no-repeat; background-position:center bottom; text-align: center !important; display: flex; flex-direction: column; justify-content: center;}
                .styledesc2{padding: 40px 30px; border-right:1px solid #edf0f2; border-bottom:1px solid #edf0f2; border-left:1px solid #edf0f2; font-family: "Config-Regular"; background-size:contain; background-repeat:no-repeat; background-position:center bottom; text-align: center !important; display: flex; flex-direction: column; justify-content: center; box-sizing: border-box;}

                td.c1x, th.c1x { width: 100%; font-size:.9em;}
                td.c2x, th.c2x { width: 50%; font-size:.9em;}
                td.c3x, th.c3x { width: 33%; font-size:.9em;}
                td.c4x, th.c4x { width: 25%; font-size:.9em;}
                td.c5x, th.c5x { width: 20%; font-size:.9em;}


                @media only screen and (max-width: 750px) {
                    table {width: 80%;}
                    table.container { width:98%; }
                    td.logo img { display:none; }
                    td.logo { background-image: url("'.$rootPath.'_images/_svg/logo.svg"); background-size:contain; background-repeat:no-repeat; background-position:center; height:50px; background-color: white;}
                    .styledesc {padding: 0;}
                    .sudi_border sub {font-size: 12px;}
                    td { width:100% !important; }
                    .title {font-size: 18px; width: 70%; margin: 25px auto 0;} 
                    .description {font-size:14px;}
                    .p_content { text-align:left; font-size:.9em; margin:0px; }
                    
                    .footer{ font-size:.7em !important; font-family: sans-serif; }
                    tbody.sudi_tbody tr { display:flex; flex-direction:column;}
                    tbody.sudi_tbody tr td:last-child { border-bottom:#afafc7 2px solid; margin-bottom:4px; }
                    td.c1x, th.c1x, td.c2x, th.c2x, td.c3x, th.c3x, td.c4x, th.c4x, td.c5x, th.c5x { width:100%; display:block; box-sizing: border-box; }
                .img { width: 80px; height:auto; border-radius:50%; overflow:hidden; }
                }
            </style>


            <div style="height:50px; color:#FFF;"></div>
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f5f8fa">
            <tbody>
            <tr>
            <td>
            <table class="container" align="center" border="0" cellpadding="0" cellspacing="0">
            <!--  H E A D E R -->
            <tbody>
            <tr>
            <td valign="top" class="logo" style="text-align: center;border-bottom: none;width: 493px;">
            <img id="main_logo" src="'.$rootPath.'_images/_svg/logo.svg" alt="Logo" width="100px" height="50px" border="0">
            </td>
            </tr>
            <!--P R I N C I P A L -->
            <tr>
            <td valign="top" class="styledesc2" bgcolor="#FFFFFF"; width: 80% !important;>

            <h1 class="title">Gracias por contactarnos</h1>

            <p class="description">Responderemos a tu mensaje lo m&aacute;s pronto posible.</p><br>

            <a href="'.$rootPath.'" class="stylebuttonmail">Regresar al sitio</a>
            </td>
            </tr> <!--P R I N C I P A L [END] -->
            <!-- F O O T E R -->
            <tr>
            <td valign="top" class="footer">ALFA</sup> | 2024
            </td>
            </tr>
            </tbody></table>
            </td>
            </tr>
            </tbody></table>
        ';

    // *********************************************************+

    //1.-Se crea la classe
        $mail =  new PHPMailer;

    //2.-Se completan los datos de envio
        $mail->setFrom('leisly@upgrade.com.mx', 'ALFA');	// Emisor (Quien lo envia)
        $mail->addAddress('leisly@upgrade.com.mx', 'Leisly Garcia');  // Receptor (Quien lo recive. *Nombre es opcional)
        // $mail->addCC('cc@example.com', '*Copia');		 	// Copia (Crear una o mas copias. *Nombre es opcional)

        //$mail->addBCC('leislygarcia25@gmail.com', 'copia admin');	 // Copia oculta (Crear una o mas copias ocultas. *Nombre es opcional)	
        $mail->Subject = 'Contacto de sitio web ALFA';     // Asunto

    //3.-Datos avanzados
        //$mail->addAttachment('/tmp/image.jpg', '*new.jpg');	// Archivo (Adjuntar uno o mas archivos. *Nombre es opcional)
        $mail->isHTML(true);                                    // Especifica si el correo es formato HTML
        $mail->CharSet = 'UTF-8';		

    //4.-Contenido
        $mail->Body = $email_admin;	                            // Contenido (Se usara esta etiqueta Body cuando el correo sea formato HTML)
        //echo $style.$mensaje_ordend;exit; 

    //5.-Enviar el mail
        $debug = false;
        // if(!$debug){
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                //1.-Se crea la classe
                $mail2 =  new PHPMailer;

                //2.-Se completan los datos de envio
                $mail2->setFrom('leisly@upgrade.com.mx', 'ALFA');	
                // Emisor (Quien lo envia)
                $mail2->addAddress($_POST['email'], $_POST['name']);

                //$mail2->addBCC('leislygarcia25@gmail.com', 'copia usuario');		
                $mail2->Subject = 'ALFA';					 					// Asunto
            //3.-Datos avanzados
                //$mail->addAttachment('/tmp/image.jpg', '*new.jpg');		 					// Archivo (Adjuntar uno o mas archivos. *Nombre es opcional)
                $mail2->isHTML(true);															// Especifica si el correo es formato HTML
                $mail2->CharSet = 'UTF-8';		

            //4.-Contenido
                $mail2->Body = $email_message;	// Contenido (Se usara esta etiqueta Body cuando el correo sea formato HTML)
                //echo $style.$mensaje_ordend;exit; 
                //5.-Enviar el mail
                if(!$mail2->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail2->ErrorInfo;
                } else {
                    // echo 'Message sent';
                    header("Location: contacto.php?message=ok");//Redirección + variable
                }

            }
        // }

    }

?>

</html>