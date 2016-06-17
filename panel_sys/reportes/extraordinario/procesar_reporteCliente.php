<?php 
	include("../../../pack_config.php");
	$texto    = sanitizar($_POST['texto_reporte']);
	$empresa  = sanitizar($_POST['empresa_reportes']);
	$inmueble = sanitizar($_POST['inmueble_reporte']);

	session_start();
	$id_personal = $_SESSION['id_usuario'];
	$type_user   = $_SESSION['type_user'];

	if ($type_user=="cliente") {
		if ($texto=='' or $empresa=='' or $inmueble=='') {
		?>
			<button style='background-color:#e06000;color:white;margin-top:20px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
			Enviar reporte extraordinario nop
			</button>
		<?php
		}
		else{
			$insertReporte = "INSERT INTO reportes_inmuebles_extraordinarios 
			     (id_inmueble,
			      id_personal,
			      type_user, 
			      texto,
			      status,
			      fecha_registro_bd) 
			     VALUES
			     ('$inmueble','$id_personal','$type_user','$texto','pendiente','$fecha')";
			$insertReporte = mysqli_query($enlace,$insertReporte) or die("no");
			?>
			<button disabled style='background-color:#e06000;color:white;margin-top:20px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
				Enviar reporte extraordinario
			</button>
			<p style='margin-top:10px' class='texto_principal'>El reporte se ha enviado y guardado correctamente</p>
			<?php
			
		}	
	}
	if($type_user=='supervisor'){
		if ($texto=='' or $inmueble=='') {
		?>
			<button style='background-color:#e06000;color:white;margin-top:20px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
			Enviar reporte extraordinario nopll
			</button>
		<?php
		}
		else{
			$insertReporte = "INSERT INTO reportes_inmuebles_extraordinarios 
			     (id_inmueble,
			      id_personal,
			      type_user, 
			      texto,
			      status,
			      fecha_registro_bd) 
			     VALUES
			     ('$inmueble','$id_personal','$type_user','$texto','pendiente','$fecha')";
			$insertReporte = mysqli_query($enlace,$insertReporte) or die("no");
			?>
			<button disabled style='background-color:#e06000;color:white;margin-top:20px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
				Enviar reporte extraordinario
			</button>
			<p style='margin-top:10px' class='texto_principal'>El reporte se ha enviado y guardado correctamente</p>
			<?php
			
		}	
	}


	

?>