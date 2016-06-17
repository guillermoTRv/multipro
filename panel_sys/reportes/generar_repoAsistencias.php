<?php 
	include("../../cfg.php");
	include("../../ruta.php");
	include("../../sanitizar.php");

	echo $type_userRepo = sanitizar($_POST['type_userRepo']);
	echo $inmueble = sanitizar($_POST['inmueble']);
	echo $fechaUno = sanitizar($_POST['fechaUno']);
	echo $fechaDos = sanitizar($_POST['fechaDos']);


	/*
	$consultaRepo = "SELECT * FROM registros_es WHERE fecha_rango BETWEEN '$fechaUno' AND '$fechaDos' ORDER BY fecha_rango ASC";
	$consultaRepo = mysqli_query($enlace,$consultaRepo) or die("no");
	while ($array = mysqli_fetch_array($consultaRepo)) {
		   echo $id_registro_es = $array['id_registro_es'];
	}*/
	header("Location: $ruta/panel/admin/Asistenciareportes&user=$type_userRepo&inmueble=$inmueble&uno=$fechaUno&dos=$fechaDos");

?>
