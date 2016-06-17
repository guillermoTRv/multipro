<?php 	
	include("../../cfg.php");
	include("../../sanitizar.php");
	$typeRepo_inmueble = $_POST['typerepo'];
	
	$substrOne = substr($typeRepo_inmueble,0,14);
	$substrTwo = substr($typeRepo_inmueble,0,12);

	if ($substrOne=='reportes_extra') {
		$var_consultaInm = substr($typeRepo_inmueble,15);
		include("info_reportes_extra.php");
	}
	if ($substrTwo=='estado_check') {
		$var_consultaInm = substr($typeRepo_inmueble,13);
		
		include("info_estado_check.php");	
	}
?>