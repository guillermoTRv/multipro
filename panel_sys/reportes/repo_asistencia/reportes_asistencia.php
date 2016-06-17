<?php 
	$type_userRepo = sanitizar($_GET['user']);
	if ($type_userRepo == "guardia"   ) {$palabra_user = "guardias";}
	if ($type_userRepo == "supervisor") {$palabra_user = "supervisores";}

	$inmuebleRepo  = sanitizar($_GET['inmueble']);
	$fechaUnoRepo  = sanitizar($_GET['uno']);
	$fechaDosRepo  = sanitizar($_GET['dos']);

	$consultaInmueble = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble='$inmuebleRepo'";
	$consultaInmueble = mysqli_query($enlace,$consultaInmueble);
	$consultaInmueble = mysqli_fetch_array($consultaInmueble);
	$consultaInmueble = $consultaInmueble['name_inmueble'];

?>

<div class="row" style="margin:0px;padding-bottom:6px;background-color:#484848;">	
		<?php include("panel_sys/reportes/repo_asistencia/form_generarReporteAsistencia.php"); ?>
</div>

<div class="row" style="margin:0px;">
		<div id="Exportar_a_Excel">
		<table class="table table-bordered" border="1" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
		        <caption style="background-color:#484848;color:#ffffff;border-top:1px solid black" >
		        	&nbsp; Reporte de asistencias para <?php echo $palabra_user ?> - Del: <?php echo $fechaUnoRepo ?> al: <?php echo $fechaDosRepo ?> para <?php echo $consultaInmueble ?> 
		        </caption>
		        <tr>
	            	<td><strong>Inmueble</strong></td>
	                <td><strong>Nombre</strong></td>
	            	<td><strong>Fecha/hora-entrada</strong></td>
	                <td><strong>Reporte estado checklist</strong></td>
	                <td><strong>Fecha/hora-salida</strong></td>
	            </tr>

		    
			<?php 
				
				$consultaRepo = "SELECT * FROM registros_es WHERE personal='$type_userRepo' and inmueble='$inmuebleRepo' and fecha_rango BETWEEN '$fechaUnoRepo' AND '$fechaDosRepo' ORDER BY fecha_rango ASC";
				$consultaRepo = mysqli_query($enlace,$consultaRepo) or die("no");
				



				while ($array = mysqli_fetch_array($consultaRepo)) {
					   $id_personalRepo = $array['id_personal'];
					   $consultaUsuario = "SELECT nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE id_usuario='$id_personalRepo'";
					   $consultaUsuario = mysqli_query($enlace,$consultaUsuario);
					   $arrayUsuario    = mysqli_fetch_array($consultaUsuario);
					   $nombre_g    = $arrayUsuario['nombre_g'];
					   $apellido_p  = $arrayUsuario['apellido_p'];
					   $apellido_m  = $arrayUsuario['apellido_m'];
					   $nombre_completo = $nombre_g."&nbsp;".$apellido_p."&nbsp;".$apellido_m;


					   $hora_entrada = $array['hora_entrada'];
					   $hora_salida  = $array['hora_salida'];
					   $cumplio_repo = $array['cumplio_repo'];

					   if ($cumplio_repo=='' or $cumplio_repo=='--') {
					   		$cumplio_repo = "no";
					   }

					   ?>
					   <tr color='white'>
					   	<td><?php echo $consultaInmueble ?></td>
					   	<td><?php echo $nombre_completo ?></td>
					   	<td><?php echo $hora_entrada ?></td>
						<td><?php echo $cumplio_repo ?></td>
					   	<td><?php echo $hora_salida ?></td>
					   </tr>
					   <?php

				}

			?>
		</table>
		</div>
</div>
