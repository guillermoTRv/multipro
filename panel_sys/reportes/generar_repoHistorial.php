<?php 
	include("../../cfg.php");
	include("../../ruta.php");
	include("../../sanitizar.php");

	$type_userRepo = sanitizar($_POST['type_userRepo']);
	$inmueble = sanitizar($_POST['inmueble']);
	$fechaUno = sanitizar($_POST['fechaUno']);
	$fechaDos = sanitizar($_POST['fechaDos']);


	
	header("Location: $ruta/panel/admin/Historialreportes&user=$type_userRepo&inmueble=$inmueble&uno=$fechaUno&dos=$fechaDos");

?>