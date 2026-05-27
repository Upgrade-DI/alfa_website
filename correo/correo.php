<?php 
	function mailContent($myStyle,$contenido){	
		// NO MODIFICAR
		$html = ' 
			<!DOCTYPE HTML> 
			<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					<title>ALFA</title>
					<link rel="stylesheet" type="text/css" href="correo/style.css" media="screen" />
					<link rel="stylesheet" type="text/css" href="correo/myStyle.css" media="screen" />
				</head>
				'.$myStyle.'
				<body>
					<table id="base" width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td>
									<table class="container" width="60%" align="center" border="0" cellpadding="0" cellspacing="0">
										<tbody>
											
											'.$contenido.'
											
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</body>
			</html>
		';
		// NO MODIFICAR [ end ]
		
		return $html;
	}
?>