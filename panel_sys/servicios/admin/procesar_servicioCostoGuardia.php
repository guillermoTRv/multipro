<?php 
	include("../../../ruta.php");
	include("../../../cfg.php");
	include("../../../sanitizar.php");

	$type_userServ           = sanitizar($_POST['type_userServ']);

	$guardia           = sanitizar($_POST['guardia']);
	$pantalon_normal   = sanitizar($_POST['pantalon_normal']);
	$pantalon_comando  = sanitizar($_POST['pantalon_comando']);
	$camisa_sectores   = sanitizar($_POST['camisa_sectores']); 
	$playera_polo      = sanitizar($_POST['playera_polo']);
	$corbata           = sanitizar($_POST['corbata']);
	$cordon_mando      = sanitizar($_POST['cordon_mando']);
	$kepi              = sanitizar($_POST['kepi']);
	$gorra             = sanitizar($_POST['gorra']);
	$chamarra          = sanitizar($_POST['chamarra']);
	$botas             = sanitizar($_POST['botas']); 

	$consultaCosto = "SELECT * FROM costos_elementos WHERE guardia = '$guardia' and pantalon_normal = '$pantalon_normal' and type_user='$type_userServ' and pantalon_comando = '$pantalon_comando' and camisa_sectores = '$camisa_sectores' and playera_polo = '$playera_polo' and corbata = '$corbata' and cordon_mando = '$cordon_mando' and kepi = '$kepi' and gorra = '$gorra' and chamarra = '$chamarra' and botas = '$botas' and type_user ='$type_userServ'";
	$consultaCosto = mysqli_query($enlace,$consultaCosto);
	$consultaCosto = mysqli_num_rows($consultaCosto);


	if ($consultaCosto == 0) {
		$updateServicios = "UPDATE costos_elementos SET guardia = '$guardia',
						pantalon_normal = '$pantalon_normal',
						pantalon_comando = '$pantalon_comando',
						camisa_sectores = '$camisa_sectores',
						playera_polo = '$playera_polo',
						corbata = '$corbata',
						cordon_mando = '$cordon_mando',
						kepi = '$kepi',
						gorra = '$gorra',
						chamarra = '$chamarra',
						botas = '$botas'
						WHERE type_user ='$type_userServ'
	                    ";
		$updateServicios = mysqli_query($enlace,$updateServicios) or die("no");
		echo "Los cambios se realizaron de manera exitosa";
	}

	


?>