<?php 
	include("controlador_personal.php");
	include("controlador_inmuebles.php");
	include("controlador_checklist.php");
	include("controlador_servicios.php");
	include("controlador_reportes.php");
	include("controlador_edicionUsuario.php");

	if ($nav == "Asistenciareportes") {
		include("panel_sys/reportes/repo_asistencia/reportes_asistencia.php");
	}
	if ($nav == "Historialreportes") {
		include("panel_sys/reportes/repo_historial/reportes_historial.php");
	}
	if ($nav == "Generalreportes") {
		include("panel_sys/reportes/repo_generales/reportes_generales.php");	
	}
	if ($nav == "Empleadosreportes") {
		include("panel_sys/reportes/repo_empleados/reportes_empleados.php");
	}
	
 #un codigo de puros includes
?>
