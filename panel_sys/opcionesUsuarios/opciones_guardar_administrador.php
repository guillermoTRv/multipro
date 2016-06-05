<?php 

		function opciones_guardar($nav_guardar,$case,$complementoGuardarf,$buttonIdf){

			if ($nav_guardar == $case) {
				global $complementoGuardar;  $complementoGuardar = $complementoGuardarf;
				global $ControllerGuardar;   $ControllerGuardar  = 1;
				global $buttonId;            $buttonId           = $buttonIdf;  
			}

		}
		
		$altaUsuarios   = opciones_guardar($nav,"personal_crear","href='#'","btn-alta-user");

		$altaCliente    = opciones_guardar($nav,"personal_crear_cliente","href='#'","btn-alta-cliente");	

		$editarUsuarios = opciones_guardar($user_nav,"User","href='#'","btn-editar-user");

		$altaInmueble   = opciones_guardar($nav,"inmuebles_crear","href='#'","btn-alta-inmueble");

		#$editarInmueble = opciones_guardar($inmueble_nav) 

		
	    if($ControllerGuardar!=1){
	    	$complementoGuardar = $popover.$opcion_none;
	    }

		?>
		<a <?php echo $complementoGuardar ?> value="enviar" id="<?php echo $buttonId; ?>" class='a_limpia'>
		    <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
		</a>
		<?php
?>

