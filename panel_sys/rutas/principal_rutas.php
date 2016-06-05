<?php 
    if ($type_user=='administrador') {
        include("panel_sys/rutas/rutas_admin.php");    
     }
    if ($type_user=='supervisor') {
        include("panel_sys/rutas/rutas_supervisor.php");
     }
    if ($type_user=='guardia') {
        include("panel_sys/rutas/rutas_guardia.php");
     } 
    if ($type_user=='cliente') {
        include("panel_sys/rutas/rutas_cliente.php");
     }
?>