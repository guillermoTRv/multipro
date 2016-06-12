<?php 
	include("../../../../sanitizar.php");
	include("../../../../cfg.php");



	$name_estado = sanitizar($_POST['zonas']);

	$zonasList = "SELECT id_estado,id_zona FROM zonas_estado WHERE name_estado='$name_estado'";
	$zonasList = mysqli_query($enlace,$zonasList);
	$zonasListA = mysqli_fetch_array($zonasList);
	$id_estado = $zonasListA['id_estado']; 
	$id_zona   = $zonasListA['id_zona'];
	
	?>
	<div class="col-md-4 espacio_input">
		<p class='text_label'>Delegacion/municipio</p>
		<select class='form-control select-sm_user' style='margin-top:-0px;' name='demarcacion_slc'>
			<?php
			$municipiosC = "SELECT nombre FROM municipios WHERE estado_id = '$id_estado' order by nombre asc";
			$municipiosC = mysqli_query($enlace,$municipiosC);
			while ($array_mn  = mysqli_fetch_array($municipiosC)) {
				    $municipio = $array_mn['nombre'];
					?>
					<option value='<?php echo utf8_encode($municipio) ?>'><?php echo utf8_encode($municipio) ?></option>				
					<?php
			}
			?>
		</select>
	</div>
	<?php


	?>
	<div class="col-md-4 espacio_input">
		<p class="text_label">Zona</p>
		<select name='zona_slc' class='form-control select-sm_user' style='margin-top:-0px;'>
			<?php
			$zona = "SELECT name_zona FROM zonas WHERE id_zona='$id_zona'";
			$zona = mysqli_query($enlace,$zona);
			$zonaA = mysqli_fetch_array($zona);
			$zonaName = $zonaA['name_zona'];
			?>
					<option value="<?php echo $zonaName ?>"><?php echo $zonaName; ?></option>				
			<?php
			?>
		</select>
	</div>
	<?php


?>
			

			