<select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
	<option>--</option>
	<?php  
		$consultaZonas = "SELECT * FROM zonas order by id_zona asc";
		$consultaZonas = mysqli_query($enlace,$consultaZonas);
		while ($arrayZonas = mysqli_fetch_array($consultaZonas) ) {
			$name_zona = $arrayZonas[1];
			echo "<option value='$name_zona'>$name_zona</option>";
		}
	?>
</select>