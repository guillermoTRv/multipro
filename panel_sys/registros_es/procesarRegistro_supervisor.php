<?php 
	include("../../../pack_config.php");
	$inmuebleRegistro = sanitizar($_POST['inmuebleRegistro']);
	
	session_start();
	$id_personal           =  $_SESSION['id_usuario'];

	#el conteo debera de contemplar tambien el valor de entrada para estado registro
	$busquedaRegistroCountC = "SELECT * FROM registros_es WHERE id_personal=$id_personal and estado_registro ='pendiente' ORDER BY id_registro_es DESC";
	$busquedaRegistroCountE = mysqli_query($enlace,$busquedaRegistroCountC) or die("error consulta");
	$busquedaRegistroCount  = mysqli_num_rows($busquedaRegistroCountE);

	if ($busquedaRegistroCount != 0) {

		$busquedaRegistroArray = mysqli_fetch_array($busquedaRegistroCountE);
		$id_inmueble           = $busquedaRegistroArray['inmueble'];

		$inmueblePendiente     = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble = '$id_inmueble'";
		$inmueblePendiente     = mysqli_query($enlace,$inmueblePendiente) or die("ho");
		$inmueblePendiente     = mysqli_fetch_array($inmueblePendiente);

		$inmueblePendiente     = $inmueblePendiente['name_inmueble']; 


		$aviso = "<p class='texto_principal'>Tienes pendiente un chekeo de salida en el inmueble $inmueblePendiente</p>";	
	}

	$registrarEntrada = "INSERT INTO  registros_es
	                                 (id_personal,
	                                  hora_entrada,
	                                  hora_salida,
	                                  estado_registro,
	                                  inmueble) 
	                           VALUES('$id_personal',
	                                  '$fecha',
	                                  '$fecha',
	                                  'entrada',
	                                  '$inmuebleRegistro')";
	$registrarEntrada = mysqli_query($enlace,$registrarEntrada) or die("error registro");

	$mensaje   = $aviso."<h4 class='texto_principal'>Se ha registrado la entrada - que tenga un buen día de trabajo</h4><br>";
	$form_des  = '<a disabled style="width:170px;font-size:1.2em;"  class="btn btn-sm btn-ind">
					Registrar entrada 
				  </a> 
                  ';

    $respuesta=[
			'uno'   => $form_des,
			'dos'   => $mensaje,
		];

		echo json_encode($respuesta);



?>