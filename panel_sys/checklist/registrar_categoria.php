<?php 
	include("../../pack_config.php");

	echo $id_cliente = sanitizar($_POST['cliente_slc']);
	echo $categoria  = sanitizar($_POST['categoria_txt']);

	$validacionConsulta = "SELECT * FROM check_categoria WHERE id_empresa='$id_empresa' and categoria='$categoria'";
	$validacionEjecutar = mysqli_query($validacionConsulta);
	$validacionCount    = mysqli_num_rows($validacionEjecutar);

	if ($validacionCount == 0) {
		
	
		$insertarCategoria = "INSERT INTO check_categoria(id_empresa,categoria,fecha_registro_bd) VALUES('$id_cliente','$categoria','$fecha')";
		$insertarCategoria = mysqli_query($enlace,$insertarCategoria) or die;


		$obtenerGet    = "SELECT name_get FROM clientes WHERE id_cliente='$id_cliente'";
		$obtenerGet    = mysqli_query($enlace,$obtenerGet);
		$obtenerGet    = mysqli_fetch_array($obtenerGet);
		$nameGet       = $obtenerGet['name_get'];

		header("Location: $ruta/panel/senasica/check-$nameGet&mens=rg-correct-categoria");


	}
	else{
		echo "hola"; 
	}

?>