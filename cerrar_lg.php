<?php
	include("ruta.php");
	include("cfg.php");
	session_start();
	
	$id_personal     =  $_SESSION['id_usuario'];

	if ($id_personal != '') {
		$busquedaEstado  = "SELECT id_registro_es,estado_registro FROM registros_es WHERE id_personal='$id_personal' order by id_registro_es desc";
		$busquedaEstado  = mysqli_query($enlace,$busquedaEstado) or die("ha");
		$busquedaEstado  = mysqli_fetch_array($busquedaEstado);
		$estado_registro = $busquedaEstado['estado_registro']; 
		$id_registro_es  = $busquedaEstado['id_registro_es'];

		if ($estado_registro == 'entrada') {
			$updateEstado  = "UPDATE registros_es SET estado_registro='pendiente' WHERE id_registro_es = '$id_registro_es'";
			$updateEstado  = mysqli_query($enlace,$updateEstado);
		}
		if ($estado_registro == 'salida') {
			$updateEstado  = "UPDATE registros_es SET estado_registro='correcto' WHERE id_registro_es = '$id_registro_es'";
			$updateEstado  = mysqli_query($enlace,$updateEstado);
		}



	}


	session_unset();
	session_destroy();
	header("Location:$ruta");
?>