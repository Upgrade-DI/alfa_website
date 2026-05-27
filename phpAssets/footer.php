<?php
	$current_page = basename($_SERVER['REQUEST_URI']);
	if ($current_page === 'inicio') {
		$qs_href = '#qs';
	} else {
		$qs_href = 'inicio#qs';
	}
?>

<footer>
	<div id="LG">
		<img src="_images/ALFAlogoaltr.svg" alt="version2">
	</div>
	<a href="contacto.php" id="MiniAzul">Calle Fresno # 1504 Colonia Granjas, cp 31100</a>
	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d875.204651834962!2d-106.09527913038329!3d28.66514949847793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea5d4beb64d3ad%3A0xd0dfd253fe28fb85!2sALFA%20Escuela%20Profesional%20de%20Manejo!5e0!3m2!1ses-419!2smx!4v1779910288478!5m2!1ses-419!2smx" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div id="CompilacionLogos">
		<a href="https://www.instagram.com/alfaepm01/" target="_blank" class="button-one"><img src="_images/InstaLogo.svg" alt="Instagram"></a>
		<a href="https://www.facebook.com/ALFAepm?mibextid=ZbWKwL" target="_blank" class="button-two"><img src="_images/FaceLogo.svg" alt="Facebook"></a>
		<a href="https://www.tiktok.com/@alfaepm01" target="_blank" class="button-three"><img src="_images/TikTokLogo.svg" alt="TikTok"></a>
		<!-- <a href="#" class="button-four"><img src="_images/Youtube.svg" alt="YouTube"></a> -->
	</div>
	<div id="LinksPag">
		<a href="inicio" class="button-five">INICIO</a>
		<a href="<?php echo $qs_href;?>" class="button-six" id="QS">¿QUIÉNES SOMOS?</a>
		<a href="contacto" class="button-seven">CONTÁCTANOS</a>
		<a href="aviso-de-privacidad" class="button-seven">AVISO DE PRIVACIDAD</a>

	</div>
	<div id="Links">
		<a href="tel:6141399922" class="button-eight">TEL. 614 139 99 22</a>
		<a href="mailto:info@alfaepm.com" class="button-nine">CORREO info@alfaepm.com</a>
	</div>
	<div id="Ref">
		<div id="Desarrolladores"><a href="https://upgrade.com.mx/inicio" target="_blank" class="button-ten" style="color:#284259; text-decoration: none;">Desarrollado por Upgrade DI® 2024</a></div>
		<p style="margin: 0; color: #284259;">©2023. Todos los derechos reservados</p>
	</div>
</footer>