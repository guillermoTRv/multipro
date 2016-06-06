<?php 
    if ($nav == 'inmuebles_listado' or isset($inmuebles_zonaid)) {
        include("panel_sys/inmuebles/admin/listado_inmuebles.php");
    }

    if (isset($inmuebles_bajasNav)) {
        include("panel_sys/inmuebles/admin/eliminar/vista_eliminarInmuebles.php"); 
    }

    if ($nav == 'inmuebles_crear') {
        include("panel_sys/inmuebles/admin/crear/crear_inmuebles.php"); 
    }
    if (isset($inmuebles_datos)) {
        include("panel_sys/inmuebles/admin/editar/principal_editarInmueble.php");
    }
    if (isset($cambioInmueble_datosGenerales)) {
        include("panel_sys/inmuebles/admin/editar_datosGenerales/editar_datosGenerales.php");
    }
    if (isset($cambioInmueble_supervisor)) {
        include("panel_sys/inmuebles/admin/editar_cambioSupervisor/editar_cambioSupervisor.php");
    }
?>