<form id="alta_usuario" method="post" enctype="multipart/form-data">
	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Nombres</p>
			<input type='text' class='form-control input-sm_user' name='name_txt'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Apellido paterno</p>
			<input type='text' class='form-control input-sm_user' name='apell_uno'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Apellido materno</p>
			<input type='text' class='form-control input-sm_user' name='apell_dos'>
		</div>

	</div>
		<br>
			<div class="row" style='padding:10px;'>
				<div class="col-md-4 espacio_input">
					<p class='text_label'>Fecha de nacimiento</p>
					<input type='date/time' class='form-control input-sm_user' name='nacimiento_date'>
				</div>
				<div class="col-md-4 espacio_input">
					<p class='text_label'>Curp</p>
					<input type='text' class='form-control input-sm_user' name='curp_txt'>
				</div>
				<div class="col-md-4 espacio_input">
					<p class='text_label'>Password</p>
					<input type='password' class='form-control input-sm_user' name='pass_txt'>
				</div>		
			</div>
	<div class="row">
		<center>
		<div style='background-color:#151515;margin-top:20px;border-radius:4px;width:93%;'>
			<p style='text-align:center;color:white;'>Dirección</p>
		</div>
		</center>
	</div>

	<div class="row" style='padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Calle</p>
			<input type='text' class='form-control input-sm_user' name='calle_txt'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Número ext</p>
			<input type='text' class='form-control input-sm_user' name='num_ext'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Numero int</p>
			<input type='text' class='form-control input-sm_user' name='num_int'>
		</div>
	</div>
	<div class="row" style='margin-top:10px;padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Colonia</p>
			<input type='text' class='form-control input-sm_user' name='colonia'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class="text_label">C.P</p>
			<input type='text' class='form-control input-sm_user' name='postal'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Entidad federativa</p>
			<select id="estado_ad" class='form-control select-sm_user' name='entidad_slc' style='margin-top:-0px;'>
				<option value=''>--</option>
				<?php include("panel_sys/lista_entidadFederativa.php"); ?>
			</select>
		</div>
	</div>
	<div class="row" style='margin-top:10px;padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Demarcación</p>
			<select id="municipio_ad" class='form-control select-sm_user' style='margin-top:-0px;' name='demarcacion_slc'>
				<option value=''>--</option>
			</select>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Mobil</p>
			<input type='text' class='form-control input-sm_user' name='mobil'>
		</div>
	</div>
	<div class="row">
		<center>
		<div style='background-color:#151515;margin-top:20px;border-radius:4px;width:93%;'>
			<p style='text-align:center;color:white;'>Datos fisicos</p>
		</div>
		</center>
	</div>

	<div class="row" style='padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Peso</p>
			<input type="text" class="form-control input-sm_user" name="peso">
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Estatura</p>
			<input type='text' class='form-control input-sm_user' name='estatura'>
		</div>
	</div>

	<div class="row"  style='padding:10px;'>
		
		<div class="col-md-4 espacio_input">
				<p class='text_label'>Fotografia del elemento</p>
				<input type="file" id="files" name="files" style="color:white;" />
				<output id="list"></output>
		</div>
	</div>
	<?php echo $toquen; ?>
	<script>
	  function archivo(evt) {
	      var files = evt.target.files; // FileList object
	       
	        //Obtenemos la imagen del campo "file". 
	      for (var i = 0, f; f = files[i]; i++) {         
	           //Solo admitimos imágenes.
	           if (!f.type.match('image.*')) {
	                continue;
	           }
	       
	           var reader = new FileReader();
	           
	           reader.onload = (function(theFile) {
	               return function(e) {
	               // Creamos la imagen.
	                      document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
	               };
	           })(f);
	 
	           reader.readAsDataURL(f);
	       }
		}
	             
	    document.getElementById('files').addEventListener('change', archivo, false);
	</script>	