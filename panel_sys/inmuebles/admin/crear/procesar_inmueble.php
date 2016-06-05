<?php 
	#aqui faltaria hacer los formatos para aceptar solo ciertos caracteres
	include("../../../pack_config.php");
	session_start();
	$type_user = $_SESSION['type_user'];
	if ($type_user == 'administrador') {
	 	$name_inmueble = sanitizar($_POST['name_txt']);
	 	$cliente       = sanitizar($_POST['cliente_slc']);
	 	$calle		   = sanitizar($_POST['calle']);
	 	$num_int	   = sanitizar($_POST['num_int']);
	 	$num_ext	   = sanitizar($_POST['num_ext']);
	 	$postal		   = sanitizar($_POST['postal']);
	 	$colonia	   = sanitizar($_POST['colonia']);
	 	$entidad       = sanitizar($_POST['entidad_slc']);
	 	$demarcacion   = sanitizar($_POST['demarcacion_slc']);
	 	$referencia    = sanitizar($_POST['referencia']);
	 	$zona          = sanitizar($_POST['zona_slc']);
	 	#faltaria la parte del codigo para validar que ningun campo quede vacio
	 	if ($name_inmueble !='' and $cliente!='' and $calle!='' and $num_int!='' and $num_ext!='' and $postal!='' and $colonia!='' and $entidad!='' and $demarcacion!='' and $referencia!='') {
	 		
	 		$validacion_c = "SELECT * FROM inmuebles WHERE name_inmueble='$name_inmueble' and cliente='$cliente' and calle='$calle' and colonia='$colonia' and num_exterior='$num_ext' and num_interior='$num_int' and codigo_postal='$postal'";
	 		$validacion_e = mysqli_query($enlace, $validacion_c);
	 		$validacion_n = mysqli_num_rows($validacion_e);
	 		$idEmpresa_Consulta = "SELECT id_cliente FROM clientes WHERE name_cliente = '$cliente'";
	 		$idEmpresa_Ejecutar = mysqli_query($enlace,$idEmpresa_Consulta) or die ("sss");
	 		$idEmpresa_Array    = mysqli_fetch_array($idEmpresa_Ejecutar); 
	 		$idEmpresa          = $idEmpresa_Array[0];
			 	if ($validacion_n==0) {
			 		
			 		$insert = "INSERT INTO 
			 				    inmuebles(
			 				   	name_inmueble,
			 				   	cliente,
			 				   	calle,
			 				   	colonia,
			 				   	num_exterior,
			 				   	num_interior,
			 				   	codigo_postal,
			 				   	entidad,
			 				   	demarcacion,
			 				   	zona,
			 				   	supervisor,
			 				   	fecha_registro_inmueble,
			 				   	fecha_mod_inmueble,
			 				   	estado_repo,
			 				   	empresa,
			 				   	referencia
			 				   	)
			 				   VALUES('$name_inmueble',
			 				   	      '$cliente',
			 				   	      '$calle',
			 				   	      '$colonia',
			 				   	      '$num_ext',
			 				   	      '$num_int',
			 				   	      '$postal',
			 				   	      '$entidad',
			 				   	      'Atizapan',
			 				   	      '$zona',
			 				   	      'Aun no cuenta',
			 				   	      '$fecha',
			 				   	      '$fecha',
			 				   	      'no',
			 				   	      '$idEmpresa',
			 				   	      '$referencia'
			 				   	      )";
			 		$insert = mysqli_query($enlace,$insert) or die("que onda");
			 		echo "<p class='texto_principal'>Los datos fueron agregados correctamente - Un nuevo inmueble se ha dado de alta</p>";
			 	}
			 	else{
			 		echo "<p class='texto_principal'>Estas introduciendo los mismos datos</p>";
			 	}
	 	}
	 	else{
	 		echo "<p class='texto_principal'>Porfavor llena todos los campos del formulario</p>";
	 	}
	} 
	else{
		echo "<p class='texto_principal'>Error al cargar los datos</p>";
	}


?>