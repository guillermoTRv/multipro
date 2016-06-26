<?php 
	include("../../../../cfg.php");
	include("../../../../sanitizar.php");

	$inmueble    =  sanitizar($_POST['inmueble_slc']);
	$credencial  =  sanitizar($_POST['credencial']);



	if ($inmueble != '') {
		$consultaUno = "SELECT supervisor,name_inmueble FROM inmuebles WHERE id_inmueble = '$inmueble'";
		$consultaUno = mysqli_query($enlace,$consultaUno) or die("---");
		$consultaUno = mysqli_fetch_array($consultaUno);

		$supervisor     = $consultaUno['supervisor'];
		$name_inmueble  = $consultaUno['name_inmueble'];



		$validacion = "SELECT id_inmueble FROM temporal_asignacion WHERE credencial = '$credencial' and id_inmueble='$inmueble'";
		$validacion = mysqli_query($enlace,$validacion) or die("-Error-");
		$validacion = mysqli_num_rows($validacion);

		if ($validacion == 0) {
			$temporal = "INSERT INTO temporal_asignacion(id_inmueble,credencial,name_inmueble) VALUES('$inmueble','$credencial','$name_inmueble')";
			$temporal = mysqli_query($enlace,$temporal) or die("--Error--");
			$mensaje  = 'Asiganar un inmueble más';
		}
		else {
			$mensaje  = 'Estas repitiendo un inmueble';
		}
		/**
		if ($supervisor == "Aun no cuenta") {
			$mensaje = "El";

		} 
		else{
			$mensaje = "";			
		}	**/



		?>
		<div class="col-md-12 espacio_input" style="margin-bottom:10px">
				<button id="btn_asignar_inmueble" class="btn btn-success btn-sm"><?php echo $mensaje ?></button>
		</div>
		<?php echo "<p style='margin-left:30px;' class='texto_principal'><strong>Asignaciones</strong></p>" ?>
		<?php

		$mostrarInmuebles = "SELECT name_inmueble FROM temporal_asignacion WHERE credencial='$credencial' order by id_inmueble ASC";
		$mostrarInmuebles = mysqli_query($enlace,$mostrarInmuebles);
		
		while ($array = mysqli_fetch_array($mostrarInmuebles)) {
			   $name_inmueble = $array['name_inmueble'];
			   echo "<p style='margin-left:30px;' class='texto_principal'> $name_inmueble </p>";

		}



	}
	else{
		?>
			<div class="col-md-12 espacio_input">
				<button id="btn_asignar_inmueble" class="btn btn-success btn-sm">Asiganar inmueble</button>
			</div>
		<?php
	}
?>