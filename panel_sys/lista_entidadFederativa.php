<?php 
	$zonasList = "SELECT name_estado FROM zonas_estado order by name_estado asc";
	$zonasList = mysqli_query($enlace,$zonasList);
	while ($arrayZonas = mysqli_fetch_array($zonasList)) {
		$name_estado = $arrayZonas['name_estado'];
		echo "<option value='$name_estado'>$name_estado</option>";
	}
?>