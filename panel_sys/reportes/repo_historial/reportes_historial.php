<?php 
	$type_userRepo = sanitizar($_GET['user']);
	if ($type_userRepo == "guardia"   ) {$palabra_user = "guardias";}
	if ($type_userRepo == "supervisor") {$palabra_user = "supervisores";}
	if ($type_userRepo == "cliente")    {$palabra_user = "clientes";}

	$inmuebleRepo  = sanitizar($_GET['inmueble']);
	$fechaUnoRepo  = sanitizar($_GET['uno']);
	$fechaDosRepo  = sanitizar($_GET['dos']);

	$consultaInmueble = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble='$inmuebleRepo'";
	$consultaInmueble = mysqli_query($enlace,$consultaInmueble);
	$consultaInmueble = mysqli_fetch_array($consultaInmueble);
	$consultaInmueble = $consultaInmueble['name_inmueble'];

?>

<div class="row" style="margin:0px;padding-bottom:6px;background-color:#484848;">	
	<?php include("panel_sys/reportes/repo_historial/form_generarReporteHistorial.php"); ?>
</div>

<div class="row" style="margin:0px;">
		<div id="Exportar_a_Excel">
		<table class="table table-bordered" border="1" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
			<caption style="background-color:#484848;color:#ffffff;border-top:1px solid black" >
		        	&nbsp; Historial de reportes para <?php echo $palabra_user ?> - Del: <?php echo $fechaUnoRepo ?> al: <?php echo $fechaDosRepo ?> para <?php echo $consultaInmueble ?> 
		    </caption>
		    <tr>
	            <td><strong>Inmueble</strong></td>
	            <td><strong>Nombre usuario</strong></td>
	            <td><strong>Reporte</strong></td>
	            <td><strong>Fecha de registro</strong></td>
	        </tr>
			
		    <tbody>
			<?php 
				

				$consultaRepo = "SELECT * FROM reportes_inmuebles_extraordinarios WHERE id_inmueble='$inmuebleRepo' and type_user='$type_userRepo' and fecha_registro_bd BETWEEN '$fechaUnoRepo' AND '$fechaDosRepo' ORDER BY fecha_registro_bd ASC";
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
					   $fecha_registro  = $array['fecha_registro_bd'];
					   $reporte         = $array['texto'];

					   if ($cumplio_repo=='' or $cumplio_repo=='--') {
					   		$cumplio_repo = "no";
					   }

					   ?>
					   <tr color='white'>
					   	<td><?php echo $consultaInmueble ?></td>
					   	<td><?php echo $nombre_completo ?></td>
					   	<td><?php echo $reporte ?></td>
					   	<td><?php echo $fecha_registro ?></td>
					   </tr>
					   <?php
				}
			?>
		</tbody>
		</table>
		</div>
</div>