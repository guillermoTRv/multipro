<?php
	include("../../../pack_config.php"); 
	session_start();
	$fecha_rango = date("Y-m-d");

	$id_personal = $_SESSION['id_usuario'];
	$consultaInmueble = "SELECT inmueble_asign FROM usuarios_datos_basicos WHERE id_usuario='$id_personal'";
	$consultaInmueble = mysqli_query($enlace,$consultaInmueble) or die("noa");
	$consultaInmueble = mysqli_fetch_array($consultaInmueble);
	$inmueble_asing   = $consultaInmueble[0];

	$consultaId  = "SELECT id_inmueble FROM inmuebles WHERE name_inmueble='$inmueble_asing'";
	$consultaId  = mysqli_query($enlace,$consultaId);
	$consultaId  = mysqli_fetch_array($consultaId);
	$id_inmueble = $consultaId['id_inmueble'];

	$busquedaRegistroCountC = "SELECT * FROM registros_es WHERE id_personal=$id_personal and estado_registro ='pendiente' ORDER BY id_registro_es DESC";
	$busquedaRegistroCountE = mysqli_query($enlace,$busquedaRegistroCountC) or die("error consulta");
	$busquedaRegistroCount  = mysqli_num_rows($busquedaRegistroCountE);

	if ($busquedaRegistroCount != 0) {
		$aviso = "<p class='texto_principal'>Tienes pendiente un chekeo de salida en el inmueble</p>";
	}
	else{
		$registrarEntrada = "INSERT INTO  registros_es
	                                 (id_personal,
	                                  hora_entrada,
	                                  hora_salida,
	                                  estado_registro,
	                                  inmueble,
									  personal,
									  fecha_rango,
									  cumplio_repo
	                                  ) 
	                           VALUES('$id_personal',
	                                  '$fecha',
	                                  '$fecha',
	                                  'entrada',
	                                  '$id_inmueble',
	                                  'guardia',
	                                  '$fecha_rango',
	                                  '--'
	                                  )";
		$registrarEntrada = mysqli_query($enlace,$registrarEntrada) or die("error registro");

		$mensaje   = $aviso."<h4 class='texto_principal'>Se ha registrado la entrada - ¡Que tenga un buen día de trabajo!</h4><br>";
		$form_des  = '<a disabled style="width:170px;font-size:1.2em;"  class="btn btn-sm btn-ind">
						Registrar entrada 
					  </a> 
	                  ';

	    $respuesta=[
				'uno'   => $form_des,
				'dos'   => $mensaje,
			];

			echo json_encode($respuesta);
	}


?>