<?php 
	include("../../../pack_config.php");
	#lo ideal seria crear una clave unica que no conzoca nadie para los registros
	$id_registro   =   sanitizar($_POST['id_es']);
	$cambioEstado  =   "UPDATE registros_es SET estado_registro='salida',hora_salida='$fecha' WHERE id_registro_es='$id_registro'";
	$cambioEstado  =   mysqli_query($enlace,$cambioEstado) or die("error en el chequeo");

	$form_des      = "<a disabled style='width:170px;font-size:1.2em;' class='btn btn-sm btn-ind'> Registrar salida </a>";
	$mensaje       = "<p class='texto_principal'>La salida se registro exitosamente</p>";


	$respuesta=[
			'uno'   => $form_des,
			'dos'   => $mensaje,
		];

		echo json_encode($respuesta);


?>