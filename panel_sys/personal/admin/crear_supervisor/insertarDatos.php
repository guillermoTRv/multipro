<?php 
	
	if ($_FILES['files']["error"] > 0){
		echo $pues="<p class='texto_principal'>El campo fotografia del guardia esta vacio</p> ";
	}		
	else {

		$permitidos = array("image/jpg","image/jpeg");
		$limite_kb = 7000;

		if (in_array($_FILES['files']['type'], $permitidos) && $_FILES['files']['size'] <= $limite_kb*1024){
		global $yes;
		$yes="true";
	    }
	    if (isset($yes)) {
        		$rutasubir ="../../../../fotografias_guardias/"."$curp_txt";
                $resultado = @move_uploaded_file($_FILES['files']["tmp_name"], $rutasubir.".jpg");
					if ($resultado){

					$insertarDatos = "INSERT INTO usuarios_datos_basicos
							(nombre_g,
							 apellido_p,
							 apellido_m,
							 edad,
							 curp,
							 usuario,

							 calle,
							 colonia,
							 num_exterior,
							 num_interior,
							 codigo_postal,
							 entidad,
							 demarcacion,
							 num_movil,
							 
							 name_img,
							 pass_xc,
							 
							 inmueble_asign,
							 #supervisor,
							 costo_serv,
							 turno,
							 horario_laboral,
							 tipo_pago,

							 fecha_inicio_contrato,
							 fecha_finalizacion,
							 fecha_registro_bd,
							 estado_repo,
							 puesto,
							 empresa,
							 peso,
							 estatura
							 ) VALUES(
							 '$name_txt',
							 '$apell_uno',
							 '$apell_dos',
							 '$date_final',
							 '$curp_txt',
							 '--',
							 '$calle_txt',
							 '$colonia',
							 '$num_ext',
							 '$num_int',
							 '$postal',
							 '$entidad_slc',
							 '$demarcacion',
							 '$num_mobil',
							 '--',
							 '$pass_txt',
							 '$name_inmueble',
							  #'$supervisor',
							 '$costo',
							 '$turno',
							 '12',
							 '$type_pago',
							 '$inicio_contr',
							 '$final_contr',
							 '$fecha',
							 'no',
							 'supervisor',
							 '$id_cliente',
							 '$peso',
							 '$estatura'
							 )";
							$insertarDatosEjec = mysqli_query($enlace,$insertarDatos) or die("que s");

							$buscarIdparaNombre  = "SELECT id_usuario FROM usuarios_datos_basicos WHERE curp = '$curp_txt'";
							$buscarIdparaNombre  = mysqli_query($enlace,$buscarIdparaNombre);
							$buscarIdparaNombre  = mysqli_fetch_array($buscarIdparaNombre);
							echo "<br>--".$id_usuarioInsertada = $buscarIdparaNombre['id_usuario'];

							$nombreMinusculas      = strtolower($name_txt);
 
							$nombreUsuario         = $nombreMinusculas.$id_usuarioInsertada;

							$InsertarNombreUsuario = "UPDATE usuarios_datos_basicos SET usuario='$nombreUsuario' where curp ='$curp_txt'";
							$InsertarNombreUsuario = mysqli_query($enlace,$InsertarNombreUsuario);

				    $id_supervisor = "SELECT id_usuario FROM usuarios_datos_basicos WHERE curp ='$curp_txt'";
				    $id_supervisor = mysqli_query($enlace,$id_supervisor);
				    $id_supervisor = mysqli_fetch_array($id_supervisor);
				    $id_supervisor = $id_supervisor['id_usuario'];

					$inmueblesSup  = "SELECT * FROM temporal_asignacion WHERE credencial ='$credencial'";
					$inmueblesSup  = mysqli_query($enlace,$inmueblesSup) or die("--asign--");
					while ($arrayS = mysqli_fetch_array($inmueblesSup)){
						   $id_inmueble = $arrayS['id_inmueble'];

						   $cambioSupervisor = "UPDATE inmuebles SET supervisor='$id_supervisor' WHERE id_inmueble='$id_inmueble'";
						   $cambioSupervisor = mysqli_query($enlace,$cambioSupervisor) or die("--update");
					}



					ECHO "<p class='texto_principal'>El registro ah sido exitoso</p>
						 <p class='texto_principal'>El nombre del usuario es $nombreUsuario</p>";

					} 
					else{
						echo "Muestrame el error";
					}
	    }
	    else{
	    	echo "string";
	    }
    }
?>