<?php 
	include("../../../cfg.php");
	include("../../../sanitizar.php");
	$empresaCheck  = sanitizar($_POST['empresaCheck']);
	$consultaCheck = "SELECT * FROM check_list WHERE id_empresa='$empresaCheck'";
	$consultaCheck = mysqli_query($enlace,$consultaCheck)or die("no");
	while ($arrayCheck = mysqli_fetch_array($consultaCheck)) {
		   $id_checklist    = $arrayCheck['id_checklist'];
		   $check_input     = "check-".$id_checklist;
		   $check_inputPost = sanitizar($_POST[$check_input]);
		   if ($check_inputPost !='') {
		   		$check_inputPost;
		   		$categoria      = $arrayCheck['categoria'];
		   		$situacion_name = $arrayCheck['situacion_name'];
		   		

		   		$bajaCheckList = "DELETE FROM check_list WHERE id_checklist='$id_checklist'";
		   		$bajaCheckList = mysqli_query($enlace,$bajaCheckList);

		   		$busquedaInmuebles = "SELECT id_inmueble, name_inmueble FROM inmuebles WHERE empresa='$empresaCheck'";
		   		$busquedaInmuebles = mysqli_query($enlace,$busquedaInmuebles);
		   		while($arrayInm = mysqli_fetch_array($busquedaInmuebles)){
		   			  
		   			  $id_inmueble = $arrayInm['id_inmueble'];

		   			  $bajaCheckEstadosInm = "DELETE FROM estados_checklist_inmuebles WHERE id_inmueble='$id_inmueble' and categoria='$categoria' and situacion_name='$situacion_name'";
		   			  $bajaCheckEstadosInm = mysqli_query($enlace,$bajaCheckEstadosInm) or die("Nop"); 

		   		}

		   		echo "<p class='texto_principal'>El checklist: $situacion_name - categoria: $categoria cate fue dado de baja exitosamente</p>";
		   		# primero buscamos todos los inmuebles cuya id este relacionadad con la empresa, despues a obtenieno la id, vamos a eliminar de la tabla estaddos checklist aquellos cuya id sea igual a la del inmueble y cuyos campos situacion name y categoria sean iguales a los de la checklist que se quieren eliminar


		   }
	}

?>