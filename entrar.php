<?php 
	#fbsql_password(link_identifier)
	include("ruta.php");
	include("sanitizar.php");
	include("evaluar_toquen.php");
	include("cfg.php");
	include("time_fecha.php");


	$name_user = sanitizar($_POST['user']);
	$pass_user = sanitizar($_POST['pass']);

	function registrar_entrada($usuarioLogin){
		global $fecha;
		global $enlace;
		$registro_entrada = "INSERT INTO registro_system(type_user,data_entrada) VALUES('$usuarioLogin','$fecha')";
		$registro_entrada = mysqli_query($enlace, $registro_entrada) or die("no");
		return true; 
	}


	$name_userCliente = substr($name_user, 0, 7);

	if ($name_userCliente == "cliente") {
		
		$loginCliente      = "SELECT id_clienteuser,nombre_usuario FROM clientes_usuarios WHERE nombre_usuario='$name_user' and password='$pass_user'";
		$loginCliente      = mysqli_query($enlace,$loginCliente);
		$loginClienteCount = mysqli_num_rows($loginCliente);	
	

		if ($loginClienteCount == 1) {
			

			$loginClienteArray = mysqli_fetch_array($loginCliente);
			$id_clienteuser    = $loginClienteArray['id_clienteuser']; 
			$nombre_usuario    = $loginClienteArray['nombre_usuario'];

			session_start();
			$_SESSION['id_usuario']   =  $id_clienteuser;
			$_SESSION['type_user']    =  "cliente";
			$_SESSION['name_user']    =  $nombre_usuario;


			$varRegistrer = $id_clienteuser."cliente";		
			registrar_entrada("$varRegistrer");	

			header("Location: $ruta/panel/cliente/personal-guardias");		


		}
		else{
			header("Location: $ruta");
		}



	}




	else{


		if ($name_user == 'admin' and $pass_user == 'pass') {
			
			registrar_entrada($name_user);
			
			session_start();
			$_SESSION['type_user']    =  "administrador";


			header("Location: $ruta/portal");
		}

		else{

			$busquedaLogin      = "SELECT id_usuario,usuario,puesto FROM usuarios_datos_basicos WHERE usuario='$name_user' and pass_xc='$pass_user'";
			$busquedaLogin      = mysqli_query($enlace,$busquedaLogin);
			$busquedaLoginCount = mysqli_num_rows($busquedaLogin);
	        

		

			if ($busquedaLoginCount == 1) {
			
			$busquedaLoginArray = mysqli_fetch_array($busquedaLogin);	

			echo $id_usuario	= $busquedaLoginArray['id_usuario'];
			echo $usuario       = $busquedaLoginArray['usuario'];
			echo $puesto        = $busquedaLoginArray['puesto'];

			session_start();
			$_SESSION['id_usuario']   =  $id_usuario;
			$_SESSION['type_user']    =  $puesto;
			$_SESSION['name_user']    =  $usuario;


			registrar_entrada($usuario);

			if ($puesto == 'guardia'   ) {header("Location: $ruta/panel/guardia/asistencia");}
			if ($puesto == 'supervisor') {header("Location: $ruta/panel/supervisor/asistencia");} 	
			

			

			}
			else{
				header("Location: $ruta");
			}


		}
	}

?>