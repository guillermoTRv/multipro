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

	$var_busqueda   = sanitizar($_POST['buscador']);
	$by_busqueda    = sanitizar($_POST['by']);         
	$type_busqueda = sanitizar($_POST['type']);


	$bachilleres = substr($var_busqueda,0,11);
    if ($bachilleres=="Bachilleres") {
        $one ="Bachilleres";
        $two = substr($var_busqueda,13);
        $var_busqueda = $one."-".$two;
    }



	header("Location: $ruta/panel/$user_get/busquedasFiltradas&q=$var_busqueda&by=$by_busqueda&ty=$type_busqueda");

?>