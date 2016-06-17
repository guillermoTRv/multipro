<?php 
	$userBusqueda = "SELECT * FROM inmuebles WHERE id_inmueble='$inmuebleId_datos'";
	$userEjecutar = mysqli_query($enlace,$userBusqueda);
	$inArray    = mysqli_fetch_array($userEjecutar);

	$name_inmueble = $inArray['name_inmueble'];
	$cliente       = $inArray['cliente'];

	$calle         = $inArray['calle'];
	$colonia       = $inArray['colonia'];
	$num_exterior  = $inArray['num_exterior'];
	$supervisor    = $inArray['supervisor'];
	$empresa       = $inArray['empresa'];
	$zona          = $inArray['zona'];
	$referencia    = $inArray['referencia'];

	$buscarSupervisor = "SELECT nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE id_usuario='$supervisor'";
	$buscarSupervisor = mysqli_query($enlace,$buscarSupervisor);
	$arraySupervisor  = mysqli_fetch_array($buscarSupervisor);
	$nombre_g   = $arraySupervisor['nombre_g'];
	$apellido_p = $arraySupervisor['apellido_p'];
	$apellido_m = $arraySupervisor['apellido_m'];
	$nameSupervisor  = $nombre_g."&nbsp;".$apellido_p."&nbsp;".$apellido_m;

?>	

<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<p class="texto_principal">
				Inmueble: <?php echo $name_inmueble."&nbsp;&nbsp;&nbsp;Empresa - ".$cliente."&nbsp"?> &nbsp;&nbsp; Supervisor: <?php echo $nameSupervisor; ?>
			</p>
			<p class="texto_principal">Domicilio; <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?>
			</p>
			<p class="texto_principal">Zona: <?php echo $zona; ?></p>
			<p class="texto_principal">Referencia: <?php echo $referencia ?></p>
			<hr>

			
			<p class="texto_principal">Seleccionar un tipo de reporte</p>
			<select id="estadoRepoInmueble" class='form-control select-sm_user' style='margin-top:0px;'>
					<option value="">--</option>
					<option value="<?php echo "reportes_extra-".$inmuebleId_datos ?>">Reportes extraordinarios</option>
					<option value="<?php echo "estado_check-".$inmuebleId_datos ?>">Estado del checklist del inmueble</option>
			</select>

			<div id="typeRepoInmueble">
				<br>				
			</div>
	        	
	
	</div>
</div>

