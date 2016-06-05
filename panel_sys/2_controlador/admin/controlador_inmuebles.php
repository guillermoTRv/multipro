<?php 
    switch ($nav) {
                
        case 'inmuebles_listado':
            include("panel_sys/inmuebles/admin/listado_inmuebles.php"); 
          break;

        case 'inmuebles_crear':
            include("panel_sys/inmuebles/admin/crear/crear_inmuebles.php"); 
          break;
                      
        case 'inmuebles_bajas':
            include("panel_sys/inmuebles/admin/eliminar/vista_eliminar.php"); 
        break;
     
    } 
    if (isset($inmuebles_datos)) {
        include("panel_sys/inmuebles/admin/editar/principal_editarInmueble.php");
    }
?>