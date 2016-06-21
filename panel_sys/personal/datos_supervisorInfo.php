<div class="row">
	<div class="col-md-8" style="border-right:1px solid white;">
		<?php 
			$userBusqueda = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$supervisor_user_id'";
			$userEjecutar = mysqli_query($enlace,$userBusqueda);
			$userArray    = mysqli_fetch_array($userEjecutar);

			
			$nombre_usuario   = $userArray['nombre_g'];
			$apellido_p       = $userArray['apellido_p'];
			$apellido_m       = $userArray['apellido_m'];
			$calle            = $userArray['calle'];
			$colonia          = $userArray['colonia'];
			$num_exterior     = $userArray['num_exterior'];
			$entidad          = $userArray['entidad'];

			$horario_laboral  = $userArray['turno'];
			$fecha_inicio     = $userArray['fecha_inicio_contrato'];
			$supervisor       = $userArray['supervisor'];
			$tipo_pago        = $userArray['tipo_pago'];

			$nombre_usuario_sistema = $userArray['usuario'];
			$mobil = $userArray['num_movil'];   
		?>

			<p style='color:#f2f2f2'>Nombre del elemento: <?php echo $nombre_usuario."&nbsp;".$apellido_p."&nbsp".$apellido_m ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>
			<p style="color:#f2f2f2;">Nombre de usuario: <?php echo $nombre_usuario_sistema ?></p>

			<p style="color:#f2f2f2;">Fecha de ingreso: <?php echo $fecha_inicio ?></p>
			<p style="color:#f2f2f2;">Tipo de pago <?php echo $tipo_pago ?></p>
			<p style="color:#f2f2f2;">Número de telefono: <?php echo $mobil ?></p>
			
	</div>
	<div class="col-md-3" style="padding-left:40px">
		<img src="<?php echo "../../fotografias_guardias/$curp.jpg" ?>" class="img-thumbnail" style='width:160px;height:170px'>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<hr>
		<p style="color:#f2f2f2;">Inmuebles Asignados</p>
			<ul style="color:white;">
				<?php 
					$inmuebles_super = "SELECT * FROM inmuebles WHERE supervisor='$supervisor_user_id' order by id_inmueble asc";
					$inmuebles_super = mysqli_query($enlace,$inmuebles_super);
					while ($array_li = mysqli_fetch_array($inmuebles_super)) {
						$name_inmuebleLi = $array_li['name_inmueble'];
						echo "<li>$name_inmuebleLi</li>";
					}
				?>
			</ul>		
	</div>
</div>


