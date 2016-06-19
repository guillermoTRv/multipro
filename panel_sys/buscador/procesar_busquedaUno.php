<?php 
	session_start();
	$type_user = $_SESSION['type_user'];
	if ($type_user == 'administrador') {
		$user_get  =  'admin'; 
	}
	if ($type_user == 'cliente') {
		$user_get  = 'cliente';
	}
	if ($type_user == 'supervisor') {
		$user_get  = 'supervisor';
	}


	include("../../cfg.php");
	include("../../sanitizar.php");
	include("../../ruta.php");
	$varBusqueda = sanitizar($_POST['buscador']);
	header("Location: $ruta/panel/$user_get/busquedas&q=$varBusqueda");
	

?>