<?php 
	if (isset($check_nav) and $nav!="baja_check") {
        include("panel_sys/checklist/listado_checklist.php");
    }
    if (isset($baja_check)) {
    	include("panel_sys/checklist/baja/principal_bajaChecklist.php");
    }
?>