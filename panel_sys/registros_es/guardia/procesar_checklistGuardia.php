<?php 
	include("../../../pack_config.php");
	session_start();
	$id_personal = $_SESSION['id_usuario'];
	$consultaInmueble = "SELECT inmueble_asign FROM usuarios_datos_basicos WHERE id_usuario='$id_personal'";
	$consultaInmueble = mysqli_query($enlace,$consultaInmueble) or die("noa");
	$consultaInmueble = mysqli_fetch_array($consultaInmueble);
	$inmueble_asing   = $consultaInmueble[0];

	$consultaId  = "SELECT id_inmueble FROM inmuebles WHERE name_inmueble='$inmueble_asing'";
	$consultaId  = mysqli_query($enlace,$consultaId);
	$consultaId  = mysqli_fetch_array($consultaId);
	$id_inmueble = $consultaId['id_inmueble'];


	for ($n=1; $n <=9 ; $n++) { 
		 
		 for ($i=0; $i <=9 ; $i++) { 
		 	$categoria    = "categoria".$n.$i;
		 	$situacion    = "situacion".$n.$i;
		 	$sin_novedad  = "sin".$n.$i;
		 	$repo_novedad = "repo".$n.$i;

		 	$categoriaPost    = $_POST[$categoria];
		 	$situacionPost    = $_POST[$situacion]; 
		 	$sin_novedadPost  = $_POST[$sin_novedad];
		 	$repo_novedadPost = $_POST[$repo_novedad];

		 	if ($situacionPost!='' and $categoriaPost!='') {

		 		if ($sin_novedadPost=='' and $repo_novedadPost=='') {
		 			$status = "sin novedad";
		 		}		 		
				if ($sin_novedadPost !="" and $repo_novedadPost=="") {
				    $status = $sin_novedadPost;
				}
				if ($repo_novedadPost!="" and $sin_novedadPost=="") {
					$status = $repo_novedadPost;
				}
				if ($repo_novedadPost!="" and $sin_novedadPost!="") {
				 	$status = $repo_novedadPost;	
				} 	 		

				echo "<br>".$situacionPost;
				echo "<br>".$status;
				echo "<br>".$categoriaPost;

				$insertRepo = "INSERT INTO reportes_checklist(credencial,categoria,situacion_check,status,guardia,fecha_registro_bd) VALUES('--','$categoriaPost','$situacionPost','$status','$id_personal','$fecha')";
				$insertRepo = mysqli_query($enlace,$insertRepo) or die("no");	

				$cambioEstado = "UPDATE estados_checklist_inmuebles SET status='$status',fecha_registro_bd='$fecha' WHERE id_inmueble = '$id_inmueble' and categoria='$categoriaPost' and situacion_name='$situacionPost'"; 
				$cambioEstado = mysqli_query($enlace,$cambioEstado) or die("no");



			}
			else{
				#pos no hay
			}
		 	
		 }

	}



/*


	$situacion_checklist = $_POST['situacionNN'];
	$sin_novedad         = $_POST['sinNN'];
	$repo_novedad        = $_POST['repoNN'];

	if ($sin_novedad == "" and $repo_novedad == "") {
		#se aborta operacion
	}


	function filaCiclo(){
		if ($sin_novedad !="" and $repo_novedad=="") {
			$status = $sin_novedad;
		}
		if ($repo_novedad!="" and $sin_novedad=="") {
			$status = $repo_novedad;
		}

		$insertarCheckReporte = "INSERT INTO ";
		$ejecutarCheckReporte = mysqli_query($enlace,$insertarCheckReporte);
		
	}

*/

?>