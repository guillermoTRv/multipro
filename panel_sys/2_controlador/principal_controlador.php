<?php
	if ($type_user == 'administrador') {
	    include("panel_sys/2_controlador/admin/principal_controladorAdmin.php");
  }

  if ($type_user == 'cliente') {
      include("panel_sys/2_controlador/cliente/principal_controladorCliente.php");
  }
  
  if ($type_user == 'supervisor') {
      include("panel_sys/2_controlador/supervisor/principal_controladorSupervisor.php");
  }

  if ($type_user == 'guardia') {
      if ($nav == "asistencia") {
          include("panel_sys/registros_es/guardia/registro_es.php");
      }
  }
    /*
    if ($type_user=='supervisor') {
      include("panel_sys/controladores/controlador_principalSupervisor.php");
	}

	if ($type_user=='guardia') {
		  switch ($nav) {
				            case 'asistencia':
						          include("panel_sys/registro_es.php");
					          break;
                    
                    case 'reportes':
                      include("panel_sys/reporte_guardia.php"); 
                    break;
			}
	}
  if ($type_user == "cliente") {
      include("panel_sys/controladores/controlador_principalCliente.php");
  }
  */
?>