<?php 
	$type_userRepo = sanitizar($_GET['user']);
	$inmuebleRepo  = sanitizar($_GET['inmueble']);
	$fechaUnoRepo  = sanitizar($_GET['uno']);
	$fechaDosRepo  = sanitizar($_GET['dos']);
	

	if ($nav == 'Historialreportes' or $nav=='enviarReporteHistorial') {
		$rutaCorreo = "$ruta/panel/$user_get/enviarReporteHistorial&user=$type_userRepo&inmueble=$inmuebleRepo&uno=$fechaUnoRepo&dos=$fechaDosRepo";			
		echo "<a href='$rutaCorreo' class='texto_principal'><span class='glyphicon glyphicon-envelope log_sm'></span></a>&nbsp;&nbsp;&nbsp;";
	}
	if ($nav == 'Asistenciareportes' or $nav=='enviarReporteAsistencia') {
		$rutaCorreo = "$ruta/panel/$user_get/enviarReporteAsistencia&user=$type_userRepo&inmueble=$inmuebleRepo&uno=$fechaUnoRepo&dos=$fechaDosRepo";
		echo "<a href='$rutaCorreo' class='texto_principal'><span class='glyphicon glyphicon-envelope log_sm'></span></a>&nbsp;&nbsp;&nbsp;";
	}
	else{
		echo "<span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;";
	}

?>	
