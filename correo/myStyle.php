<?php	
    $myStyle = '
	<style type="text/css">

		* { font-family: sans-serif; }
		table {width:75%; color:black; margin: auto; text-align: center;}
		td{background-color: white !important;}
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
	';
?>