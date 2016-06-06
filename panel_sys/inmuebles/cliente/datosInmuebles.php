<?php 
	$userBusqueda = "SELECT * FROM inmuebles WHERE id_inmueble='$datosInmuebles_id'";
	$userEjecutar = mysqli_query($enlace,$userBusqueda);
	$inArray    = mysqli_fetch_array($userEjecutar);

	$name_inmueble = $inArray['name_inmueble'];
	$cliente       = $inArray['cliente'];

	$calle         = $inArray['calle'];
	$colonia       = $inArray['colonia'];
	$num_exterior  = $inArray['num_exterior'];
	$supervisor    = $inArray['supervisor'];
	$empresa       = $inArray['empresa'];
?>	

<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<p style='color:#f2f2f2'>Inmueble: <?php echo $name_inmueble."&nbsp;&nbsp;&nbsp;Empresa - ".$cliente."&nbsp"?> &nbsp;&nbsp; Supervisor: <?php echo $supervisor; ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>
			<hr>
	

			<div class="row">
				<div style='color:white;' class="col-md-10">
				
				</div>
			</div>

</div>
