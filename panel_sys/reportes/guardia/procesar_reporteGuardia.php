<?php
	include("../../../pack_config.php");
	$texto = $_POST['texto_reporte'];
	
	if ($texto=='') {
		?>
		<button type="button" class="btn btn-default" id="guardar_reporteGuardia">Guardar reporte</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
		<?php
	}
	else
	{	
		session_start();
		$id_personal = $_SESSION['id_usuario'];
		$consultaInmueble = "SELECT inmueble_asign FROM usuarios_datos_basicos WHERE id_usuario='$id_personal'";
		$consultaInmueble = mysqli_query($enlace,$consultaInmueble) or die("noa");
		$consultaInmueble = mysqli_fetch_array($consultaInmueble);
		$inmueble_asing   = $consultaInmueble[0];

		$consultaId  = "SELECT id_inmueble FROM inmuebles WHERE name_inmueble='$inmueble_asing'";
		$consultaId  = mysqli_query($enlace,$consultaId);
		$consultaId  = mysqli_fetch_array($consultaId);
		$id_inmueble = $consultaId['id_inmueble'];


		$insertarReporte = "INSERT INTO reportes_inmuebles_extraordinarios(id_inmueble,id_personal,type_user,texto,status,fecha_registro_bd) VALUES('$id_inmueble','$id_personal','guardia','$texto','pendiente','$fecha')";
		$ejecutarReporte = mysqli_query($enlace,$insertarReporte) or die("no");
		echo "El reporte ha sido levantado exitosamente";
		?>
		<button type="button" class="btn btn-default" disabled>Guardar reporte</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
		<?php
	}

?>
  <!--#centenario e la constitucion app y el tip que hizo el pitch-->