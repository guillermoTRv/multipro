<?php 
	include("../../pack_config.php");

	echo $id_cliente = sanitizar($_POST['cliente_slc']);
	echo $categoria  = sanitizar($_POST['categoria_slc']);
	echo $situacion  = sanitizar($_POST['situacion_txt']);

	$validacionConsulta = "SELECT * FROM check_list WHERE id_empresa='$id_empresa' and categoria='$categoria' and situacion_name = '$situacion'";
	$validacionEjecutar = mysqli_query($validacionConsulta);
	$validacionCount    = mysqli_num_rows($validacionEjecutar);

	if ($validacionCount == 0) {
		
	
		$insertarCheck = "INSERT INTO check_list(id_empresa,categoria,situacion_name,status,fecha_registro_bd) VALUES('$id_cliente','$categoria','$situacion','no','$fecha')";
		$insertarCheck = mysqli_query($enlace,$insertarCheck) or die;


		$consultaCheckInmueble = "SELECT id_inmueble FROM inmuebles WHERE empresa='$id_cliente'";
		$consultaCheckInmueble = mysqli_query($enlace,$consultaCheckInmueble);
		while ($arrayCheck  = mysqli_fetch_array($consultaCheckInmueble)) {
			   $id_inmueble = $arrayCheck['id_inmueble'];

			   $insertarCheckEstado = "INSERT INTO estados_checklist_inmuebles(id_inmueble,categoria,situacion_name,status,fecha_registro_bd) values('$id_inmueble','$categoria','$situacion','sin novedad','$fecha')";
			   $insertarCheckEstado = mysqli_query($enlace,$insertarCheckEstado) or die("no"); 
		}



		$obtenerGet    = "SELECT name_get FROM clientes WHERE id_cliente='$id_cliente'";
		$obtenerGet    = mysqli_query($enlace,$obtenerGet);
		$obtenerGet    = mysqli_fetch_array($obtenerGet);
		$nameGet       = $obtenerGet['name_get'];

		header("Location: $ruta/panel/senasica/check-$nameGet");


	}
	else{
		echo "hola"; 
	}

?>