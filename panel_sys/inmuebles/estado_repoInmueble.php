<?php 
	$i = 0;
	$busquedaCheck      = "SELECT * FROM estados_checklist_inmuebles WHERE id_inmueble='$id_inmueble'";
	$busquedaCheck      = mysqli_query($enlace,$busquedaCheck);
	$busquedaCheckCount = mysqli_num_rows($busquedaCheck);


	$busquedaCheckSin      = "SELECT * FROM estados_checklist_inmuebles WHERE id_inmueble='$id_inmueble' and status='sin novedad'";
	$busquedaCheckSin      = mysqli_query($enlace,$busquedaCheckSin);
	$busquedaCheckSinCount = mysqli_num_rows($busquedaCheckSin);

	$busqueda_repoExtra      = "SELECT * FROM reportes_inmuebles_extraordinarios WHERE id_inmueble='$id_inmueble' and status='pendiente'";
	$busqueda_repoExtra      = mysqli_query($enlace,$busqueda_repoExtra);
	$busqueda_repoExtraCount = mysqli_num_rows($busqueda_repoExtra);
	

	
	if ($busquedaCheckCount == $busquedaCheckSinCount and $busqueda_repoExtraCount==0) {
		global $color; $color = 'green';
	}
	if ($busquedaCheckCount != $busquedaCheckSinCount or $busqueda_repoExtraCount!=0) {
		global $color; $color = '#DF0101';
	}
	
?>
