<?php 
	if ($nav == 'asistencia') {
		include("panel_sys/registros_es/supervisor/principal_registroSupervisor.php");
	}

	if (isset($personal_nav)) {
		include("panel_sys/personal/supervisor/listado_personal.php");
	}

	if (isset($user_datos)) {		
		include("panel_sys/personal/supervisor/infocambio_personal.php");
	}

	if (isset($nav_jefeTurno)) {
		include("panel_sys/personal/supervisor/jefeTurno/jefeTurno_personal.php");	
	}

	if ($nav == 'servicios') {
		include("panel_sys/servicios/supervisor/servicios_supervisor.php");
	}

	if ($nav == 'reportes') {
		include("panel_sys/reportes/reportes.php");
	}
	  
?>