<?php 
	include("../../../cfg.php");
	include("../../../ruta.php");
	include("../../../sanitizar.php");
	include("../../../time_fecha.php");


	$empresa  = sanitizar($_POST['empresa']);
	$fechaUno = sanitizar($_POST['fechaUno']);
	$fechaDos = sanitizar($_POST['fechaDos']);


	session_start();
    $type_user       =  $_SESSION['type_user'];


	if ($type_user == "administrador") {
		$ruta_user = "admin";
	}
	if ($type_user == "cliente") {
		$ruta_user = "cliente";
	}
	if ($type_user == "supervisor") {
		$ruta_user = "supervisor";
	}

	$fecha;
	$fechaDos;


	
	$datetimeFechaUno = new DateTime($fechaUno);
	$datetimeFechaDos = new DateTime($fechaDos);
	if($datetimeFechaDos > $datetimeFechaUno){

		
			$datetime = new DateTime($fecha);
			
			if($datetime >= $datetimeFechaDos){
				echo "<br>Corre :)";
				header("Location: $ruta/panel/$ruta_user/Generalreportes&emp=$empresa&uno=$fechaUno&dos=$fechaDos");	
			}
			else{
				header("Location: $ruta/panel/$ruta_user/errorReporte&error=2");
			    echo "<br>No corre porque la fecha dos es mas grande que la fecha actual";
			}		

	}
	else{
	    echo "<br>No corre porque la fecha uno es mas grande";
		header("Location: $ruta/panel/$ruta_user/errorReporte&error=1");
	}
	
	#header("Location: $ruta/panel/$ruta_user/Generalreportes&emp=$empresa");
?>

