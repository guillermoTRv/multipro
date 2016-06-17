<?php 
	include("../../../../cfg.php");
	include("../../../../sanitizar.php");
	$cliente_empresa = sanitizar($_POST['cliente_empresa']);
	$clientes_inm = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE empresa = '$cliente_empresa'";
	$clientes_inm = mysqli_query($enlace,$clientes_inm);
	while ($arrayInm    = mysqli_fetch_array($clientes_inm) ) {
		    $id_inmueble   = $arrayInm['id_inmueble']; 
		    $name_inmueble = $arrayInm['name_inmueble'];  
		    $inmueble_input     = "inmueble-".$id_inmueble;
		    $inmueble_inputPost = sanitizar($_POST[$inmueble_input]);

  		    if ($inmueble_inputPost != '') {
		   	    #$inmueble_inputPost;
		   	    $bajaInmueble = "DELETE FROM inmuebles WHERE id_inmueble = '$id_inmueble'";
		   	    $bajaInmueble = mysqli_query($enlace,$bajaInmueble) or die("no");
		   	    echo "<p class='texto_principal'>El inmueble - $name_inmueble fue dado de baja exitosamente</p>";


		    }

	}
	#una funcion para mandar un mensaje de que no se selecciono ningun elemento
?>