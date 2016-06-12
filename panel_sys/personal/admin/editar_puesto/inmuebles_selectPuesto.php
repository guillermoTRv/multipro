<?php 

	$var = $_POST['elegid'];
	include("../../../../cfg.php");


	$idConsulta = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE empresa = '$var' order by id_inmueble asc";
	$idEjecutar = mysqli_query($enlace,$idConsulta);
	
	while ($idArray = mysqli_fetch_array($idEjecutar)) {
		
		$id_inmueble    = $idArray['id_inmueble'];
		$name_inmueble  = $idArray['name_inmueble'];

		echo "<option value='$id_inmueble'> $name_inmueble </option>";
	}

?>
	
