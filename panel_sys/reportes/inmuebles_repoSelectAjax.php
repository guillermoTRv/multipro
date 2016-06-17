<?php 
	include("../../cfg.php");
	include("../../sanitizar.php");

	$id_empresa = sanitizar($_POST['empresa']);

	$inmuebles = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE empresa = '$id_empresa'";
	$inmuebles = mysqli_query($enlace,$inmuebles);
	while ($arr = mysqli_fetch_array($inmuebles)) {
		   $id_inmueble = $arr['id_inmueble'];
		   $name_inmueble = $arr['name_inmueble'];

		   echo "<option value='$id_inmueble'>$name_inmueble</option>";
	
	}
?>