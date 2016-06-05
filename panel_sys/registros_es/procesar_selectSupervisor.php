<?php 
	include("../../../sanitizar.php");
	include("../../../input_toquen.php");
	$id_inmueble = sanitizar($_POST['registros_es']);
	
	if ($id_inmueble != '') {
		echo "<input type='hidden' name='inmuebleRegistro' value='$id_inmueble'>";
		echo $toquen;
	}

	
?>