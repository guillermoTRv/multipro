<?php 

		if (isset($personal_nav) and $nav!='personal_bajas'){
			$rutaAgregar        = "$ruta/panel/$user_get/personal_bajas";
       		$complementoBaja     = "href='$rutaAgregar'";
       		$variableControllerBaja = 1;
		}
		if ($nav=='personal_bajas' or isset($personal_bajas)) {
			$rutaAgregar = "$ruta";
			$complementoBaja = "href='#baja_elementoModal' data-toggle='modal' ";
			$variableControllerBaja = 1;
			include("panel_sys/personal/admin/eliminar/modal_ventana.php");
		}
	    
	    if (isset($inmuebles_nav)) {
	        $rutaAgregar        = "$ruta/panel/$user_get/inmuebles_bajas"; 
	    	$complementoBaja     = "href='$rutaAgregar'";
	    	$variableControllerBaja = 1;
	    }

	    if (isset($inmuebles_bajasNav)) {
			$rutaAgregar = "$ruta";
			$complementoBaja = "href='#baja_inmuebleModal' data-toggle='modal' ";
			$variableControllerBaja = 1;
			include("panel_sys/inmuebles/admin/eliminar/modal_ventanaInm.php");
		}
	    if($variableControllerBaja!=1){
	    	$complementoBaja = $popover.$opcion_none;
	    }
		if (isset($check_nav)) {
			$rutaAgregar        = "$ruta/panel/$user_get/baja_check"; 
	    	$complementoBaja     = "href='$rutaAgregar'";
	    	$variableControllerBaja = 1;
		}
		if (isset($baja_check)) {
			$rutaAgregar = "$ruta";
			$complementoBaja = "href='#baja_checkModal' data-toggle='modal' ";
			$variableControllerBaja = 1;
			include("panel_sys/checklist/baja/modal_ventanaCheck.php");	
		}
		

		?>
		<a class='a_limpia' <?php echo "$complementoBaja" ?>>
              <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
        </a>
		<?php
?>