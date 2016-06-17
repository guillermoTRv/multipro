<?php 
	include("../../../ruta.php");
	include("../../../cfg.php");
	include("../../../sanitizar.php");

	$type_userServ           = sanitizar($_POST['type_userServ']);
	$fin_semana              = sanitizar($_POST['fin_semana']);


	$consultaCosto = "SELECT guardia_fin_semana FROM costos_elementos WHERE type_user='$type_userServ'";
	$consultaCosto = mysqli_query($enlace,$consultaCosto);
	$consultaCosto = mysqli_fetch_array($consultaCosto);
	$consultaCosto = $consultaCosto['guardia_fin_semana'];

	if ($consultaCosto!=$fin_semana) {
		$updateServicios = "UPDATE costos_elementos SET guardia_fin_semana = '$fin_semana' WHERE type_user ='$type_userServ'";
		$updateServicios = mysqli_query($enlace,$updateServicios) or die("no");
		echo "Los cambios se realizaron de manera exitosa, el costo del guardia en fin de semana es ahora de $fin_semana";
	}


?>