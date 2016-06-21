<div class="row">
	<?php 
		$userBusqueda = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$personal_user_id'";
		$userEjecutar = mysqli_query($enlace,$userBusqueda);
		$userArray    = mysqli_fetch_array($userEjecutar);
		$curp         = $userArray['curp'];  
	?>
	<div class="col-md-8" style="border-right:1px solid white;">
		<?php 
		

		
		$nombre_usuario   = $userArray['nombre_g'];
		$apellido_p       = $userArray['apellido_p'];
		$apellido_m       = $userArray['apellido_m'];
		$calle            = $userArray['calle'];
		$colonia          = $userArray['colonia'];
		$num_exterior     = $userArray['num_exterior'];
		$entidad          = $userArray['entidad'];
		$inmueble         = $userArray['inmueble_asign'];

		$horario_laboral  = $userArray['turno'];
		$fecha_inicio     = $userArray['fecha_inicio_contrato'];
		$tipo_pago        = $userArray['tipo_pago'];

		$nombre_usuario_sistema = $userArray['usuario'];
		$mobil = $userArray['num_movil']; 

		?>
			<p style='color:#f2f2f2'>Nombre del elemento: <?php echo $nombre_usuario."&nbsp;".$apellido_p."&nbsp".$apellido_m ?> &nbsp;&nbsp; Inmueble asignado: <?php echo $inmueble; ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>
			<p style="color:#f2f2f2;">Nombre de usuario: <?php echo $nombre_usuario_sistema ?></p>

			<p style="color:#f2f2f2;">Horario de labores: <?php echo $horario_laboral ?></p>
			<p style="color:#f2f2f2;">Fecha de ingreso: <?php echo $fecha_inicio ?></p>
			<p style="color:#f2f2f2;">Tipo de pago: <?php echo $tipo_pago ?></p>
			<p style="color:#f2f2f2;">Número de telefono: <?php echo $mobil ?></p>	
		
			<!--<img  style='width:100px;height:100px' src="<?php #echo "$ruta/fotografias_guardias/hola.jpg" ?>">-->	
	</div>
	<div class="col-md-3" style="padding-left:40px">
		<img src="<?php echo "../../fotografias_guardias/$curp.jpg" ?>" class="img-thumbnail" style='width:160px;height:170px'>
	</div>

</div>