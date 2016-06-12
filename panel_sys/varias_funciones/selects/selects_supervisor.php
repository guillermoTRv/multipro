<?php 
	if (isset($personal_nav)) {
		?>
		<select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
		<option>--</option>
		<?php
			$inmueblesEncargados  = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE supervisor='$id_personal' order by id_inmueble asc";
			$inmueblesEncargados  = mysqli_query($enlace,$inmueblesEncargados);
			while ($arrayConsulta = mysqli_fetch_array($inmueblesEncargados)) {
				   $id_inmueble   = $arrayConsulta['id_inmueble'];
				   $name_inmueble = $arrayConsulta['name_inmueble'];

				   echo "<option value='$id_inmueble'>$name_inmueble</option>";

			}
		?></select><?php
	}
	
?>
