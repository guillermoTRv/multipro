<?php 
	include("../../../cfg.php");
	include("../../../sanitizar.php");
	include("../../../ruta.php");
	$varPost        =   sanitizar($_POST['personal']);
	echo $typePersonal   =   substr($varPost, 0,1);
	$id_cliente     =   substr($varPost, 2);

	if ($typePersonal == 1 || $typePersonal == 2) {

		
		$listadoInmuebles = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE empresa='$id_cliente' order by id_inmueble asc";
		$listadoInmuebles = mysqli_query($enlace,$listadoInmuebles);
		
		echo "<option>--</option>";
		while ($arrayInm  = mysqli_fetch_array($listadoInmuebles)) {
			   $id_inmueble    = $arrayInm['id_inmueble'];
			   $name_inmueble  = $arrayInm['name_inmueble'];

			   echo "<option value='$typePersonal-$name_inmueble'>$name_inmueble</option>";
		}


	}


	if ($typePersonal == 3) {
		include("tablas/tabla_supervisorSoloEmpresa.php");
	}

	
 		




?>
