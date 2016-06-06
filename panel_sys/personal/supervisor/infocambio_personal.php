<?php 
	$idUser_nav   = substr($nav,5);
	$userBusqueda = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$idUser_nav'";
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
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;margin-top:10px;'>
			<p style='color:#f2f2f2'>Nombre del elemento: <?php echo $nombre_usuario."&nbsp;".$apellido_p."&nbsp".$apellido_m ?> &nbsp;&nbsp; Inmueble asignado: <?php echo $inmueble; ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>

			<p style="color:#f2f2f2;">Horario de labores</p>
			<p style="color:#f2f2f2;">Fecha de ingreso</p>
			<p style="color:#f2f2f2;">Supervisor asignado</p>
			<p style="color:#f2f2f2;">Tipo de pago</p>

			<hr>
			<p style="color:#f2f2f2;">Estado del usuario</p>			
			<form id="form_jefeTurno" action="">
				<a  href="<?php echo "$ruta/panel/$user_get/asignarJefeTurno-".$idUser_nav; ?>" class="a_limpia"><span class='glyphicon glyphicon-asterisk'></span> Asignar como jefe de turno</a>
			</form>
	</div>

</div>