<?php 
	include("../../../../cfg.php");
	include("../../../../sanitizar.php");
	include("../../../../ruta.php");
	$inmueble_user = sanitizar($_POST['inmueble_user']);
	$nav           = sanitizar($_POST['nav']);
	$usuarioInmuebles = "SELECT id_usuario,nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE inmueble_asign = '$inmueble_user'";
	$usuarioInmuebles = mysqli_query($enlace,$usuarioInmuebles);
	$contador = 0;
	while ($arrayUser = mysqli_fetch_array($usuarioInmuebles)) {
		   $id_usuario = $arrayUser['id_usuario'];
		   $nombre_g   = $arrayUser['nombre_g'];
		   $apellido_p = $arrayUser['apellido_p'];
		   $apellido_m = $arrayUser['apellido_m']; 

		   $user_input     = "user-".$id_usuario;
		   $user_inputPost = sanitizar($_POST[$user_input]);

		   if ($user_inputPost != '') {
		   	   $user_inputPost;
		   	   $bajaUsuario = "DELETE FROM usuarios_datos_basicos WHERE id_usuario = '$id_usuario'";
		   	   #$bajaUsuario = mysqli_query($enlace,$bajaUsuario) or die("no");
		   	   $ruta_r = $ruta."/panel/admin/$nav";
		   	   $mensaje = "<p class='texto_principal' styl>El usuario - $nombre_g $apellido_p $apellido_m fue dado de baja exitosamente</p>
					";
				$contador = 1;
				echo $mensaje;
				
		   	   
		   }

	}

	if ($contador == "0") {
		echo "<p class='texto_principal'>No se selecciono algun usuario</p>";
		?>
		<center>
                <button type="button" class="btn btn-default" id="btn_bajaElementos">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>       
        </center>
		<?php
	}


	if ($contador == "1") {
		?>
		<center>              
	            <a class='btn btn-default' href='<?php echo $ruta_r; ?>'>Cerrar ventana</a>
	    </center>
		<?php
	}
	
?>

