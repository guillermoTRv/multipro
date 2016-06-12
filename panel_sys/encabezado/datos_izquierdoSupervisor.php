<?php 
	if (isset($personal_nav)) {
		$num_inmueble = substr($nav,9);
		$inmuebleIzq = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble='$num_inmueble'";
		$inmuebleIzq = mysqli_query($enlace,$inmuebleIzq) or die("no");
		$inmuebleIzq = mysqli_fetch_array($inmuebleIzq);
		$dato_izquierdo = $name_inmuebleIzq = $inmuebleIzq['name_inmueble'];
	}
?>