<?php 
include("../../../../pack_config.php");
	
 #echo $empresa    = $_POST['empresa_slc'];
 echo "<br>".$inmueble   = sanitizar($_POST['inmueble_slc']); 
 echo "<br>".$id_usuario = sanitizar($_POST['user']);

	if ($inmueble!='' and $id_usuario!='') {
		$valConsulta = "SELECT * FROM inmuebles WHERE id_inmueble = '$inmueble'";
		$valEjecutar = mysqli_query($enlace,$valConsulta) or die("no");
		$valConteo   = mysqli_fetch_array($valEjecutar);
		$supervisor  = $valConteo['supervisor'];

			if ($supervisor == "Aun no cuenta") {

			 	$insertarSupervisor = "UPDATE inmuebles SET supervisor='$id_usuario' WHERE id_inmueble='$inmueble'";
			 	$insertarSupervisor = mysqli_query($enlace,$insertarSupervisor) or die("Error al registrar supervisor"); 

			 	$cambioTypeUser = "UPDATE usuarios_datos_basicos SET inmueble_asign='--',supervisor='--',puesto='supervisor' where id_usuario='$id_usuario'";
			 	$cambioTypeUser = mysqli_query($enlace,$cambioTypeUser) or die("Que rayos");

			 	echo "Se ha asignado correctamente como supervisor al personal con la id $id_usuario";
			}
			else{
				if ($supervisor == $id_usuario) {
				   echo "Ya esta registrado como supervisor";
			    }
			    else{
					$insertarSupervisor = "UPDATE inmuebles SET supervisor='$id_usuario' WHERE id_inmueble='$inmueble'";
				 	$insertarSupervisor = mysqli_query($enlace,$insertarSupervisor) or die("Error al registrar supervisor"); 

				 	$cambioTypeUser = "UPDATE usuarios_datos_basicos SET inmueble_asign='--',supervisor='--',puesto='supervisor' where id_usuario='$id_usuario'";
				 	$cambioTypeUser = mysqli_query($enlace,$cambioTypeUser) or die("Que rayos");

				 	echo "Se ha cambiado a '$supervisor' como supervisor del inmueble '$inmueble' por el personal $id_usuario";				   
			    }				
			}	


	}
	else{
		echo "datos incompletos";	
	}

		
/*
 $validacionConsulta = "SELECT * FROM inmuebles WHERE id_inmueble = '$inmueble' and supervisor = '$id_usuario'";
 $validacionEjecutar = mysqli_query($enlace,$validacionConsulta);
 $validacionConteo   = mysqli_num_rows($validacionEjecutar);


 $valConsulta = "SELECT * FROM inmuebles WHERE id_inmueble = '$inmueble'";
 $valEjecutar = mysqli_query($enlace,$valConsulta);
 $valConteo   = mysqli_fetch_array($valEjecutar);

 echo $supervisor  = $valConteo['supervisor'];

 if ($supervisor == "Aun no cuenta") {
 	$insertarSupervisor = "UPDATE inmuebles SET supervisor='$id_usuario' WHERE id_inmueble='$inmueble'";
 	$insertarSupervisor = mysqli_query($enlace,$insertarSupervisor) or die("Error al registrar supervisor"); 

 	$cambioTypeUser = "UPDATE usuarios_datos_basicos SET inmueble_asign='--',supervisor='--',puesto='supervisor' where id_usuario='$id_usuario'";
 	$cambioTypeUser = mysqli_query($enlace,$cambioTypeUser) or die("Que rayos");

 	echo "Se puede registrar sin problemas un supervisor";
 }
 else{
	
	if ($supervisor == $id_usuario) {
		echo "Ya esta registrado como supervisor";
	}
	else{
		echo "quieres remplazar al usuario con la id $supervisor por $usuario ";
	}
 	
 }
*/

#le podriamos poner un validador como el que tenemos en crear listas en donde podemos cancelar operacion, los mensajes de que si
 #esta seguro de registrar datos y asi pero mejor lo consultamos con cesar que tal si al mero momento no era eso o piden cambio
 #mientras esto solo lo ocupamos para poder hacer lo de los supervisores


/*
 if ($validacionConteo == 0) {
 	echo "hola";
 }
 else{
 	echo "ya hay un supervisor registrado";
 }
 #despues que tenemos que hacer
*/
?>

<button id="btn-cambio-user" type="button" class="btn btn-default">--Aceptar--</button>