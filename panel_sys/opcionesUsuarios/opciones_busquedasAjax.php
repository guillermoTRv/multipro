<?php 
	include("../../sanitizar.php");
	$opcion = sanitizar($_POST['busq']);
	if ($opcion == 'personal') {
		?>
		<option value="nombre">Nombre y apellidos</option>
		<option value="inmueble">Inmueble</option>
		<option value="edad">Edad</option>
		<option value="curp">Curp</option>
		<!--Podriamos poner despues fecha de ingreso, y rango de peso y estatura-->
		<?php
	}
	if ($opcion == 'inmuebles') {
		?>
		<option value="nombre">Nombre del inmueble</option>
		<option value="supervisor">Supervisor a cargo</option>
		<?php	
	}


?>