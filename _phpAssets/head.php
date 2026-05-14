<?php
// Configuraciones generales
$noFollow = true;

?>
<!-- METAS GENERALES -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="viewport-fit=cover, width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
<meta name="robots" content="<?php echo (!$noFollow) ? 'follow, index': 'nofollow, noindex'; ?>"/>
<meta name="author" content="Upgrade Diseño Interactivo"/>
<meta name="copyright" content="2024"/>

<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="_images/favicon.ico"/>

<!-- CSS General -->
<link rel="stylesheet" type="text/css" href="_includes/_css/large.css"/>
<link rel="stylesheet" type="text/css" media="only screen and (min-width:1600px)"  href="_includes/_css/hd.css"/>
<link rel="stylesheet" type="text/css" media="only screen and (min-width:10px) and (max-width:600px)"   href="_includes/_css/small.css"/>
<link rel="stylesheet" type="text/css" media="only screen and (min-width:601px) and (max-width:899px)"  href="_includes/_css/medium.css"/>
<link rel="stylesheet" type="text/css" media="only screen and (min-width:900px) and (max-width:1100px)" href="_includes/_css/std.css"/>