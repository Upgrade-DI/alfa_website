<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns#">
<head>
    <meta name="keywords" content="Escuela de manejo, Curso de manejo principiantes, Clases de conducción intermedias, Capacitación de manejo masivo, Educación vial, Licencia de conducir, Conducción segura, Instrucción automovilística, Manejo defensivo, Certificación de conductor"/>
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ALFA Escuela Profesional de Manejo" />
    <meta property="og:description" content="Escuela de manejo ALFA: Ofrecemos cursos de manejo personalizados para todos los niveles, desde principiantes hasta conductores experimentados que buscan mejorar sus habilidades." />
    <meta property="og:image" content="" />

    <?php include_once("phpAssets/head.php"); ?>

    <title>Contacto</title>
</head>
<body>
<?php include_once("phpAssets/analytics.php"); ?>
<?php include_once("phpAssets/header.php"); ?>

<!-- Contenedor principal -->
<div id="formulario">
    <div id="MiniBlocBlue">
        <div><h1 id="OrgTitle">Contáctanos</h1></div>
        <div id="NewLogos">
            <a href="tel:6141399922"><img src="_images/PhoneLogo.svg" alt="Phone">614 139 99 22</a>
            <a href="mailto:a.escobedo@cpiseguridad.com.mx" class="AcompaLogo"><img src="_images/MailLogo.svg" alt="Mail">a.escobedo@cpiseguridad.com.mx</a>
            <p><img src="_images/UbiLogo.svg" alt="Ubicacion">Plaza Comercial Travessia <br> Av. Teófilo Borunda No 11811</p>
        </div>

        <div id="Mapa">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d875.204651834962!2d-106.09527913038329!3d28.66514949847793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea5d4beb64d3ad%3A0xd0dfd253fe28fb85!2sALFA%20Escuela%20Profesional%20de%20Manejo!5e0!3m2!1ses-419!2smx!4v1779910288478!5m2!1ses-419!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="net-ct">
            <img id="Minilogo" src="_images/MiniLogo.svg" alt="Lg">
            <div id="CompilacionLogosNaranjas">
                <a href="" class="button"><img src="_images/InstaOra.svg" alt="Instagram"></a>
                <a href="" class="button"><img src="_images/FaceOra.svg" alt="Facebook"></a>
                <a href="" class="button"><img src="_images/TikTokOra.svg" alt="TikTok"></a>
                <a href="" class="button"><img src="_images/YoutubeOra.svg" alt="YouTube"></a>
            </div>
        </div>
    </div>
    <div class="form-container">
    <?php if(!$_GET['message']){  ?>
        <form id="form-contact" action="c-ok.php" method="post">
            <div class="ct-input"><label for="name" class="form">Nombre Completo*</label><input type="text" class="Rellenar" name="name"></div>
            
            <div class="align-input">
                <div class="ct-input"><label for="phone" class="form">Teléfono*</label><input type="number" class="Rellenar" name="phone"></div>
                <div class="ct-input"><label for="email" class="form">Correo electrónico*</label><input type="email" class="Rellenar" name="email"></div>
            </div>
            
            <div class="align-input">
                <div class="ct-input"><label for="birthdate" class="form">Fecha de nacimiento*</label><input type="date" class="Rellenar" name="birthdate"></div>
                <div class="ct-input"><label for="age" class="form">Edad:*</label><input type="number" class="Rellenar" name="age"></div>
            </div>
            
            <div class="ct-input"><label for="message" class="form">Mensaje:</label><textarea id="message" name="message"></textarea></div>

            <input type="hidden" name="MMinsert" value="runContacto"/>
            <button id="enter" type="submit">ENVIAR</button>
        </form>
    <?php }else{ ?> 
            <div id="message_container">
                <p><span>Gracias</span> por contactarnos,<br>en breve nos comunicaremos.</p>
            </div>
        <?php } ?> 
    </div>
</div>

<?php include_once("phpAssets/footer.php"); ?>

</body>
</html>