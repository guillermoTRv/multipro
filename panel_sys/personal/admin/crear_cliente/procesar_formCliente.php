<?php 
	include("../../pack_config.php");

	$nombre      = sanitizar($_POST['nombre']); 
	$apellido_p  = sanitizar($_POST['paterno']);   
	$apellido_m  = sanitizar($_POST['materno']);    
	$curp        = sanitizar($_POST['curp']);  
	$pass        = sanitizar($_POST['pass']);  

	
	if ($nombre !='' and $apellido_p !='' and $apellido_m!='' and $curp!='' and $pass!='') {
		
		if (preg_match("/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/", $curp)) {


			$validacionCurp = "SELECT * FROM clientes_usuarios WHERE curp= '$curp'";
			$validacionCurp = mysqli_query($enlace,$validacionCurp) or die("error - comprobacion");
			$validacionCurp = mysqli_num_rows($validacionCurp);

			if ($validacionCurp == 0) {
				
				$insertardatos = "INSERT INTO clientes_usuarios(
				nombre_g,
				apellido_p,
				apellido_m,
				nombre_usuario,
				curp,
				password,
				fecha_registro_bd,
				fecha_mod_bd) 
				VALUES(
				'$nombre',
				'$apellido_p',
				'$apellido_m',
				'--',
				'$curp',
				'$pass',
				'$fecha',
				'$fecha')";
				$insertardatos = mysqli_query($enlace,$insertardatos) or die("error - insertar");

				$busquedaId = "SELECT id_clienteuser FROM clientes_usuarios WHERE curp = '$curp'";
				$busquedaId = mysqli_query($enlace,$busquedaId) or die("error");
				$busquedaId = mysqli_fetch_array($busquedaId);
				$id         = $busquedaId['id_clienteuser'];

				$nameMinusculas = strtolower($nombre);
				$nombreUsuario  = "cliente"."-".$nameMinusculas."-".$id;

				$insertName  = "UPDATE clientes_usuarios SET nombre_usuario = '$nombreUsuario' WHERE id_clienteuser='$id'";
				$insertName  = mysqli_query($enlace,$insertName) or die("error name cliente");


				echo "<p class='texto_principal'>Un nuevo cliente ah sido creado exitosamente <br> El nombre de usuario es $nombreUsuario <p>";
			}


			else {
				echo "Un usuario con los anteriores datos ya existe - error al insertar datos";
			}






					
		}


		else{
			echo "<p class='texto_principal'>Campo curp no valido</p>";
		}


	}
	else{
		echo "<p class='texto_principal'>No se han llenado todos los campos del formulario</p>";
	}







?>