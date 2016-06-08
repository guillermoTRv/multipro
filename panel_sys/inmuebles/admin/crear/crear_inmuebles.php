<div style='border:2px solid #e06000;margin-bottom:20px;'>
	<form id="crear_inmueble" method="post" enctype="multipart/form-data">
	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-8 espacio_input">
			<p class='text_label'>Nombre del inmueble</p>
			<input type='text' class='form-control input-sm_user' name='name_txt'>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Cliente</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='cliente_slc'>
				<option value=''>--</option>
				<?php include("lista_clientes.php"); ?>
			</select>
		</div>
	</div>

	<div class="row" style='padding:10px;margin-top:20px;'>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Calle</p>
			<input type='text' class='form-control input-sm_user' name='calle'>
		</div>

		<div class="col-md-3 espacio_input">
			<p style='text-align:center;' class='text_label'>Num-Interior</p>
			<input type='text' class='form-control input-sm_user' name='num_int'>
		</div>

		<div class="col-md-3 espacio_input">
			<p style='text-align:center;' class='text_label'>Num-Exterior</p>
			<input type='text' class='form-control input-sm_user' name='num_ext'>
		</div>

		<div class="col-md-2 espacio_input">
			<p style='text-align:center;' class='text_label'>Codigo Postal</p>
			<input type='text' class='form-control input-sm_user' name='postal'>
		</div>
	</div>

	<div class="row" style='padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Colonia</p>
			<input type='text' class='form-control input-sm_user' name='colonia'>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Entidad Federativa</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='entidad_slc'>
				<option value=''></option>
				<option value='Estado de Mexico'>Estado de Mexico</option>
				<option value='Ciudad de Mexico'>Ciudad de Mexico</option>
			</select>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Delegacion/municipio</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='demarcacion_slc'>
				<option value=''>--</option>
				<option value='Atizapan'>Atizapan</option>
				<option value='Tlalnepantla'>Tlalneplanta</option>
				<option value='GAM'>GAM</option>
				<option value='Azcapotzalco'>Azcapotzalco</option>
				<option value='Miguel Hidaldo'>Miguel Hidalgo</option>
			</select>
		</div>

	</div>

	<div class="row" style='margin-top:20px;padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Zona</p>
			<select name='zona_slc' class='form-control select-sm_user' style='margin-top:-0px;' >
				<option value="zona centro">Zona centro</option>
				<option value="zona norte">Zona norte</option>
				<option value="zona noreste">Zona noreste</option>
				<option value="zona centro occidente">Zona centro occidente</option>
				<option value="zona sureste">Zona sureste</option>
				<option value="zona centro oriente">Zona centro oriente</option>
			</select>
		</div>	

		<div class="col-md-8">
			<p class='text_label'>*Referencias</p>
			<textarea class="form-control" rows="3" name='referencia'></textarea >
		</div>	
		<?php echo $toquen; ?>	
	</div>

  </form>
</div>
<div id="m_v">

</div>