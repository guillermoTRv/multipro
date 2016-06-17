<?php 
	$infoCliente = "SELECT nombre_g,apellido_p,apellido_m,fecha_registro_bd,nombre_usuario FROM clientes_usuarios WHERE id_clienteuser = '$cliente_user_id'";
	$infoCliente = mysqli_query($enlace,$infoCliente);
	$infoCliente = mysqli_fetch_array($infoCliente);

	$nombre_usuario = $infoCliente['nombre_usuario'];
	$nombre_g       = $infoCliente['nombre_g'];
	$apellido_p     = $infoCliente['apellido_p'];
	$apellido_m     = $infoCliente['apellido_m'];
	$fecha_inicio   = $infoCliente['fecha_registro_bd'];
?>
<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<p style='color:#f2f2f2'>
				Nombre del elemento cliente: <?php echo $nombre_g."&nbsp;".$apellido_p."&nbsp".$apellido_m ?> &nbsp;&nbsp;</p>
			<p style="color:#f2f2f2;">Fecha del usuario en el sistema: <?php echo $nombre_usuario ?></p>
			<p style="color:#f2f2f2;">Fecha de ingreso: <?php echo $fecha_inicio ?></p>
			
			

			<?php 
				include("panel_sys/personal/info_reportes.php");
			?>
	</div>
</div>
