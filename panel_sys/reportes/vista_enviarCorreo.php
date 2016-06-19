<?php 
	$type_userRepo = sanitizar($_GET['user']);
	if ($type_userRepo == "guardia"   ) {$palabra_user = "guardias";}
	if ($type_userRepo == "supervisor") {$palabra_user = "supervisores";}
	if ($type_userRepo == "cliente")    {$palabra_user = "clientes";}

	if ($nav =='enviarReporteHistorial') {
		$type_repo = 'Historial de reportes';
	}
	if ($nav =='enviarReporteAsistencia') {
		$type_repo = 'Asistencias';
	}


	$inmuebleRepo  = sanitizar($_GET['inmueble']);
	$fechaUnoRepo  = sanitizar($_GET['uno']);
	$fechaDosRepo  = sanitizar($_GET['dos']);

	$consultaInmueble = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble='$inmuebleRepo'";
	$consultaInmueble = mysqli_query($enlace,$consultaInmueble);
	$consultaInmueble = mysqli_fetch_array($consultaInmueble);
	$consultaInmueble = $consultaInmueble['name_inmueble'];

?>
<div class="row">
	<div class="col-md-12" style="padding:10px 20px 10px 20px">
		<h4 style="color:white">Enviar reporte &nbsp;- &nbsp;<?php echo $type_repo ?> para <?php echo $palabra_user ?> - Del: <?php echo $fechaUnoRepo ?> al: <?php echo $fechaDosRepo ?> para <?php echo $consultaInmueble ?>  </h4>
		<hr>
		<p class="texto_principal">Para: email predeterminado</p>
		<form id="form_reporte_General" method="POST" enctype="multipart/form-data">
		        <textarea class="form-control" rows="3" name="texto_reporte"></textarea>
		</form>

		<div class='row'>
			<div class="col-md-4">
				<select id="municipio_ad" class='form-control select-sm_user'  name='demarcacion_slc'>
					<option value=''>Elige un formato</option>
					<option value='Atizapan de Zaragoza'>Atizapan de Zaragoza</option>
					<option value='Alvaro Obregon'>Alvaro Obregon</option>
				</select>	
			</div>
			
			<div class="col-md-3">
				<button style='background-color:#e06000;color:white;margin-top:27px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
					Enviar reporte
				</button>
			</div>	
		</div>

	</div>
</div>
