<?php 
	if ($type_user == "administrador") {
		$getEmpresa_c      = "SELECT id_cliente FROM clientes WHERE name_get = '$user_get'";
		$getEmpresa_e      = mysqli_query($enlace, $getEmpresa_c) or die("que paso");
		$getEmpresa_a      = mysqli_fetch_array($getEmpresa_e);
		$getEmpresa        = $getEmpresa_a[0];
	}
?>