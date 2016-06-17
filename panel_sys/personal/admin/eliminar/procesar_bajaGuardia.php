<?php 
	include("../../../../cfg.php");
	include("../../../../sanitizar.php");
	$inmueble_user = sanitizar($_POST['inmueble_user']);
	$usuarioInmuebles = "SELECT id_usuario,nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE inmueble_asign = '$inmueble_user'";
	$usuarioInmuebles = mysqli_query($enlace,$usuarioInmuebles);
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
		   	   $bajaUsuario = mysqli_query($enlace,$bajaUsuario) or die("no");
		   	   echo "<p class='texto_principal'>El usuario - $nombre_g $apellido_p $apellido_m fue dado de baja exitosamente</p>";


		   }

	}
	
?>

