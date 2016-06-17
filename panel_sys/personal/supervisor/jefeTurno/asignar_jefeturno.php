<?php 
	include("../../../../cfg.php");
	include("../../../../sanitizar.php");
	include("../../../../ruta.php");
	include("../../../../time_fecha.php");

	$id_usuario    = sanitizar($_POST['id_usuario']);    
	$id_inmueble   = sanitizar($_POST['inmueble']);
	$typoConsulta  = sanitizar($_POST['consulta']);
	$name_user     = sanitizar($_POST['name_user']);
	$name_inmueble = sanitizar($_POST['name_inmueble']) ;


	if ($typoConsulta == 'in') {
		$insert   = "INSERT INTO jefe_turno(id_personal,id_inmueble, 	fecha_registro_bd) VALUES('$id_usuario','$id_inmueble','$fecha')";
		$insert   = mysqli_query($enlace,$insert) or die("no");

		echo $pregunta = "<br><p style='color:white;font-size: 1.2em'>El personal $name_user fue asignado correctamente como jefe de turno para el inmueble $name_inmueble</p>";
		echo "<a href='$ruta/panel/supervisor/User-$id_usuario' class='a_limpia'>Regresar</a>";
	}
	if ($typoConsulta == 'up') {
		
		$update = "UPDATE jefe_turno SET id_personal='$id_usuario' where id_inmueble='$id_inmueble'";
		$update = mysqli_query($enlace,$update) or die("no");
		echo $pregunta = "<br><p style='color:white;font-size: 1.2em'>El personal $name_user fue asignado correctamente como jefe de turno para el inmueble $name_inmueble</p>";
		echo "<a href='$ruta/panel/supervisor/User-$id_usuario' class='a_limpia'>Regresar</a>";

	}

?>