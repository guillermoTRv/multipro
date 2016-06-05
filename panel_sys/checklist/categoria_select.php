<?php 
	include("../../cfg.php");
	include("../../sanitizar.php");


	$check = sanitizar($_POST['check']);
	$busquedaCategoria = "SELECT categoria FROM check_categoria WHERE id_empresa='$check'";
	$busquedaCategoria = mysqli_query($enlace,$busquedaCategoria) or die("que");

	$countCategoria = mysqli_num_rows($busquedaCategoria);

	
	if ($countCategoria==0) {
		echo "<option value=''>Necesitas agregar una categoria $countCategoria</option>";
	}
	else{
		while ($array = mysqli_fetch_array($busquedaCategoria)) {
				$nameCategoria = $array['categoria'];
				echo "<option value='$nameCategoria'>$nameCategoria</option>";	
		}	
	}
	
?>