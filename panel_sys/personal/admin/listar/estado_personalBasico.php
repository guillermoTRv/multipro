<?php 

	$consultaReporte = "SELECT * FROM reportes_general_extraordinarios WHERE id_personal='$id_usuario' and status = 'pendiente' and type_user='$type_userConsulta'";
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





