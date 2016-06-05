<?php 

		if (isset($personal_nav)){
			$rutaAgregar        = "$ruta/panel/$user_get/personal_bajas";
       		$complementoBaja     = "href='$rutaAgregar'";
       		$variableControllerBaja = 1;
		}

		
	    
	    if (isset($inmuebles_nav)) {
	        $rutaAgregar        = "$ruta/panel/$user_get/inmuebles_bajas"; 
	    	$complementoBaja     = "href='$rutaAgregar'";
	    	$variableControllerBaja = 1;
	    }
	    if($variableControllerBaja!=1){
	    	$complementoBaja = $popover.$opcion_none;
	    }
		
		

		?>
		<a class='a_limpia' <?php echo "$complementoBaja" ?>>
              <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
        </a>
		<?php
?>