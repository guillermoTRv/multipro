<?php
	#funcion para indicar cuando un usario revase su turno decirle a cesar
	#cuando no haga checklist pero sera imposible por la habilitacion 
	#cuando lo reporte un supervisor o un cliente
	#cuando el haga un reporte
?>

<?php 

	$consultaReporte = "SELECT * FROM reportes_inmuebles_extraordinarios WHERE id_personal='$id_usuario' and status = 'pendiente' and type_user='$type_userConsulta'";
	$consultaReporte = mysqli_query($enlace,$consultaReporte) or die("no");
	$consultaReporteCount = mysqli_num_rows($consultaReporte);

	$var = $consultaReporteCount;

	if ($var == 0) {
		global $color; $color = 'green';
	}
    else {
    	global $color; $color = '#DF0101';
    }

?>


