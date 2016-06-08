<?php 

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
?>