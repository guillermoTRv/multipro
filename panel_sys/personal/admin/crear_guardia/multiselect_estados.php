<?php 
	include("../../../../sanitizar.php");
	include("../../../../cfg.php");

	$name_estado = sanitizar($_POST['municipio']);

	$municipioList = "SELECT id_estado FROM zonas_estado WHERE name_estado='$name_estado'";
	$municipioList = mysqli_query($enlace,$municipioList);
	$municipioListA = mysqli_fetch_array($municipioList);
	$id_estado = $municipioListA['id_estado']; 
	
	
	$municipiosC = "SELECT nombre FROM municipios WHERE estado_id = '$id_estado' order by nombre asc";
	$municipiosC = mysqli_query($enlace,$municipiosC);
	while ($array_mn  = mysqli_fetch_array($municipiosC)) {
		    $municipio = $array_mn['nombre'];
			?>
			<option value='<?php echo utf8_encode($municipio) ?>'><?php echo utf8_encode($municipio) ?></option>			
			<?php
	}
			



?>