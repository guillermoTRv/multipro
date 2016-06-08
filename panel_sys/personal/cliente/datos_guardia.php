<?php 
	$userBusqueda = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$personal_user_id'";
	$userEjecutar = mysqli_query($enlace,$userBusqueda);
	$userArray    = mysqli_fetch_array($userEjecutar);

	
	$nombre_usuario   = $userArray['nombre_g'];
	$apellido_p       = $userArray['apellido_p'];
	$apellido_m       = $userArray['apellido_m'];
	$calle            = $userArray['calle'];
	$colonia          = $userArray['colonia'];
	$num_exterior     = $userArray['num_exterior'];
	$entidad          = $userArray['entidad'];
	$inmueble         = $userArray['inmueble_asign'];

?>	

<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<p style='color:#f2f2f2'>Nombre del elemento: <?php echo $nombre_usuario."&nbsp;".$apellido_p."&nbsp".$apellido_m ?> &nbsp;&nbsp; Inmueble asignado: <?php echo $inmueble; ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>

			<p style="color:#f2f2f2;">Horario de labores</p>
			<p style="color:#f2f2f2;">Fecha de ingreso</p>
			<p style="color:#f2f2f2;">Supervisor asignado</p>
			<p style="color:#f2f2f2;">Tipo de pago</p>
			<hr>
		<div class="row">
	</div>

	</div>

</div>