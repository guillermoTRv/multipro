<?php 
	include("../../../cfg.php");
	include("../../../sanitizar.php");
	include("../../../ruta.php");

	$varPost         =   sanitizar($_POST['personal']);
	$typePersonalGet =   substr($varPost, 0,1);
	$name_inmueble   =   substr($varPost, 2);


	if ($typePersonalGet==1) {include("tablas/tabla_guardia.php");}   		
	if ($typePersonalGet==2) {include("tablas/tabla_supervisor.php");}
	
?>