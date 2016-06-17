<?php 
	if ($nav == 'asistencia') {
		include("panel_sys/registros_es/supervisor/principal_registroSupervisor.php");
	}

	if (isset($personal_nav)) {
		include("panel_sys/personal/supervisor/listado_personal.php");
	}

	if (isset($user_datos)) {#se ocupa $user_datos porque asi no interfiere con personal-n que enlista el personal con el imueble		
		$personal_user_id =  $idUser_nav   = substr($nav,5);
	    include("panel_sys/personal/toda_la_info_guardia.php");
	}


	if (isset($nav_jefeTurno)) {
		include("panel_sys/personal/supervisor/jefeTurno/jefeTurno_personal.php");	
	}

	if ($nav == 'servicios') {
		include("panel_sys/servicios/supervisor/servicios_supervisor.php");
	}

	if (isset($inmuebles_datos)) {
        include("panel_sys/inmuebles/toda_la_info_inmueble.php");
    }

	if (isset($reportes_nav)) {
        include("panel_sys/reportes/reportes.php");
    }
	  
?>