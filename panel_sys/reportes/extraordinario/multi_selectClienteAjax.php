<?php 
	include("../../../cfg.php");
	include("../../../sanitizar.php");
	include("../../../ruta.php");
	$id_cliente       =   sanitizar($_POST['cliente']);
	$listadoInmuebles = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE empresa='$id_cliente' order by id_inmueble asc";
	$listadoInmuebles = mysqli_query($enlace,$listadoInmuebles);
		
	echo "<option value=''>--</option>";
	while ($arrayInm  = mysqli_fetch_array($listadoInmuebles)) {
		$id_inmueble    = $arrayInm['id_inmueble'];
		$name_inmueble  = $arrayInm['name_inmueble'];
		echo "<option value='$id_inmueble'>$name_inmueble</option>";
	}
?>
