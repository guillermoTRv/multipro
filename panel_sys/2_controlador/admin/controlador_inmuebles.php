<?php 
    if ($nav == 'inmuebles_listado') {
        include("panel_sys/inmuebles/admin/listado_inmuebles.php");
    }

    if (isset($inmuebles_bajasNav)) {
        include("panel_sys/inmuebles/admin/eliminar/vista_eliminarInmuebles.php"); 
    }

    if ($nav == 'inmuebles_crear') {
        include("panel_sys/inmuebles/admin/crear/crear_inmuebles.php"); 
    }
    if (isset($inmuebles_datos)) {
        include("panel_sys/inmuebles/toda_la_info_inmueble.php");
    }
    if (isset($cambioInmueble_datosGenerales)) {
        include("panel_sys/inmuebles/admin/editar_datosGenerales/editar_datosGenerales.php");
    }
    if (isset($cambioInmueble_supervisor)) {
        include("panel_sys/inmuebles/admin/editar_cambioSupervisor/editar_cambioSupervisor.php");
    }
    if (isset($estado_checklistInmueble)) {
        include("panel_sys/inmuebles/admin/editar/info_checklist.php");   
    }
?>