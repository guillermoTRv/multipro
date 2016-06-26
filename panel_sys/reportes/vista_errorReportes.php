<?php 
	$type_error = sanitizar($_GET['error']);
	if ($type_error == 1) {
		$mensaje = "La fecha uno no puede ser más grande que la fecha dos";
	}
	if ($type_error == 2){
		$mensaje = "Error, se intenta genera un reporte con una fecha que aun no llega";
	}

	if ($type_user == "administrador") {
		$ruta_user = "admin";
	}
	if ($type_user == "cliente") {
		$ruta_user = "cliente";
	}
	if ($type_user == "supervisor") {
		$ruta_user = "supervisor";
	}


	$rutaError = "$ruta/panel/$ruta_user/reportes";

?>
<div style="margin:30px;">
	<h4 class='texto_principal'><?php echo $mensaje ?></h4>
    <a  class='a_limpia' href="<?php echo $rutaError ?>">Regresar a reportes</a>	
</div>
