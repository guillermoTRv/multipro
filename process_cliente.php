<?php 
	include("ruta.php");
	include("cfg.php");
	$cliente_empresaGet = $_GET['cl'];


	$consultaClientes = "SELECT name_cliente,name_get FROM clientes WHERE name_get='$cliente_empresaGet'";
    $consultaClientes = mysqli_query($enlace,$consultaClientes) or die("no");
    $consultaClientes = mysqli_fetch_array($consultaClientes);
    $name_cliente     = $consultaClientes['name_cliente'];


	session_start();
	$cliente_empresa   =   $_SESSION['cliente_empresa']  =  $name_cliente; 

    header("Location: $ruta/panel/$cliente_empresaGet/personal-guardias");

?>