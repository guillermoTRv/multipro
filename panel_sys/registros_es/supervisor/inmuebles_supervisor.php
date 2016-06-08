<?php 
	echo "<option value=''> -- </option>";
	$inmueblesSupervisor = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE supervisor = '$id_personal' ";
	$inmueblesSupervisor = mysqli_query($enlace,$inmueblesSupervisor);
	while ($arrayConsulta = mysqli_fetch_array($inmueblesSupervisor)) {
			
		   $id_inmueble   = $arrayConsulta['id_inmueble'];
		   $name_inmueble = $arrayConsulta['name_inmueble'];  
		   echo "<option value='$id_inmueble'>$name_inmueble</option>";
	}
?>