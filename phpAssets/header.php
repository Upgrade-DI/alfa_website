<?php
	// $current_page = basename($_SERVER['PHP_SELF']);
	$current_page = basename($_SERVER['REQUEST_URI']);
	if ($current_page === 'inicio') {
		$qs_href = '#qs';
	} else {
		$qs_href = 'inicio#qs';
	}
?>

	<header class="bg_center_cover">
		<div>
			<a  id="logo" class="bg_center_cover" href="./"><span></span></a>
		</div>
	    <div class="header-content">
			<h1>ESCUELA PROFESIONAL DE MANEJO</h1>
		    <nav class="nav-bottom">
			    <a href="inicio" class="button-one">INICIO</a>
			    <a href="<?php echo $qs_href; ?>" class="button-two">¿QUIÉNES SOMOS?</a>
			    <a href="contacto" class="button-three">CONTÁCTANOS</a>
		    </nav>
	    </div>
	</header>