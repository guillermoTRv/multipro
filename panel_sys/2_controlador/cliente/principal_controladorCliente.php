<?php 
	if ($nav == 'personal-guardias') {
		include("panel_sys/personal/cliente/listado_personalGuardias.php");
	}

	if (isset($personalSupervisorNavCliente)) {
		include("panel_sys/personal/cliente/listado_personalSupervisor.php");
	}

	if (isset($inmuebles_nav)) {
		include("panel_sys/inmuebles/cliente/listado_inmueblesCliente.php");		
	}	

	if ($nav == "servicios") {
		include("panel_sys/servicios/cliente/servicios_cliente.php");
	}


	/*
	$personalSupervisorNav = substr($nav,0,21);
	if ($personalSupervisorNav == 'personal-supervisores') {
		include("panel_sys/listados/clientes/listado_personalSupervisor.php");
	}

	
	$personalDate       =  substr($nav,0,11);
	if ($personalDate == "guardiaDate") {
		$idUser_nav         =  substr($nav,12);
		include("panel_sys/listados/clientes/infoPersonal_guardia.php");
	}
	
	
	if (isset($inmuebles_nav)) {
		include("panel_sys/listados/clientes/listado_inmueblesCliente.php");		
	}	

	if ($nav == "servicios") {
		include("panel_sys/servicios/clientes/servicios_cliente.php");
	}
	*/
?>