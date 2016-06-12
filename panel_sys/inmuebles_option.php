<?php 
	$listInmuebles = "SELECT id_inmueble,name_inmueble FROM inmuebles order by id_inmueble asc";
	$listInmuebles = mysqli_query($enlace,$listInmuebles);
	while ($arrayList = mysqli_fetch_array($listInmuebles)) {
		$id_inmueble   = $arrayList['id_inmueble'];
		$name_inmueble = $arrayList['name_inmueble'];

		echo "<option value='$id_inmueble'>$name_inmueble</option>";
 	}
?>
