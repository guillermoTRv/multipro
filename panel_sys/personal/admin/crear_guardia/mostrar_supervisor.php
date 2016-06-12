<?php 
	include("../../../../cfg.php");
	$id_inmueble  =  $_POST['elegid'];
	$consulta_c   =  "SELECT supervisor FROM inmuebles WHERE id_inmueble='$id_inmueble'";
	$consulta_e   =  mysqli_query($enlace,$consulta_c);
	$consulta     =  $consulta_e->fetch_array();
	$name_inmueble = $consulta['supervisor'];
	echo "<option>$name_inmueble</option>";	
?>

