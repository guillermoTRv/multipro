<?php 
	include("../../../ruta.php");
	include("../../../cfg.php");
	include("../../../sanitizar.php");
	$type_costo           = sanitizar($_POST['type_costo']);
	
	if ($type_costo==1) {

		$costo_normal    = sanitizar($_POST['costo_normal']);

		$consultaCosto = "SELECT costo_normal FROM costos_supervisor";
		$consultaCosto = mysqli_query($enlace,$consultaCosto);
		$consultaCosto = mysqli_fetch_array($consultaCosto);
		$consultaCosto = $consultaCosto['costo_normal'];

		if ($costo_normal != $consultaCosto) {
			$updateServicios = "UPDATE costos_supervisor SET costo_normal = '$costo_normal'";
			$updateServicios = mysqli_query($enlace,$updateServicios) or die("no");
			echo "Los cambios se realizaron de manera exitosa, el costo del supervisor ahora es de $costo_normal";	
		}

	}

	if ($type_costo==2) {
		
		$fin_semana    = sanitizar($_POST['fin_semana']);

 		$consultaCosto = "SELECT costo_fin_semana FROM costos_supervisor";
		$consultaCosto = mysqli_query($enlace,$consultaCosto);
		$consultaCosto = mysqli_fetch_array($consultaCosto);
		$consultaCosto = $consultaCosto['costo_fin_semana'];

		if ($consultaCosto != $fin_semana) {
			$updateServicios = "UPDATE costos_supervisor SET costo_fin_semana = '$fin_semana'";
			$updateServicios = mysqli_query($enlace,$updateServicios) or die("no");
			echo "Los cambios se realizaron de manera exitosa, el costo del supervisor en fin de semana ahora es de $fin_semana";
		}


	}


	


?>