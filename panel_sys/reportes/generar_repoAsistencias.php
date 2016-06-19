<?php 
	include("../../cfg.php");
	include("../../ruta.php");
	include("../../sanitizar.php");

	$type_userRepo = sanitizar($_POST['type_userRepo']);
	$inmueble = sanitizar($_POST['inmueble']);
	$fechaUno = sanitizar($_POST['fechaUno']);
	$fechaDos = sanitizar($_POST['fechaDos']);


	/*
	$consultaRepo = "SELECT * FROM registros_es WHERE fecha_rango BETWEEN '$fechaUno' AND '$fechaDos' ORDER BY fecha_rango ASC";
	$consultaRepo = mysqli_query($enlace,$consultaRepo) or die("no");
	while ($array = mysqli_fetch_array($consultaRepo)) {
		   echo $id_registro_es = $array['id_registro_es'];
	}*/
	header("Location: $ruta/panel/admin/Asistenciareportes&user=$type_userRepo&inmueble=$inmueble&uno=$fechaUno&dos=$fechaDos");

?>
