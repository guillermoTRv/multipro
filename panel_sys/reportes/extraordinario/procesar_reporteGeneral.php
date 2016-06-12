<?php 
	include("../../../pack_config.php");
	$texto = sanitizar($_POST['texto_reporte']);
	#hace falta la vali para que no se soscriba texto posiblemente ? 
	if ($texto=='') {
		?>
			<button style='background-color:#e06000;color:white;margin-top:20px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
			Enviar reporte extraordinario
			</button>
		<?php
	}
	else{
		session_start();
		$id_personal = $_SESSION['id_usuario'];
		$type_user   = $_SESSION['type_user'];

		$insertReporte = "INSERT INTO reportes_general_extraordinarios(id_personal,type_user,texto,status,fecha_registro_bd) VALUES('$id_personal','$type_user','$texto','pendiente','$fecha')";
		$insertReporte = mysqli_query($enlace,$insertReporte) or die("no");
		?>
		<button disabled style='background-color:#e06000;color:white;margin-top:20px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
			Enviar reporte extraordinario
		</button>
		<?php
		echo "<p class='texto_principal'>El reporte se ha enviado y guardado correctamente</p>";
	}


?>