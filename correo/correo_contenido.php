<?php 
	
	$mensaje_usuario = '
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
	
	$mensaje_admin = '
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
	
?>
