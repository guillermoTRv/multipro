<h4 class='texto_principal'>Generacion de <?php echo $nav ?></h4>
<hr>

<?php 
	if ($nav=="reportes") {
	?>		
		<a href="<?php echo "$ruta/panel/$user_get/reportes-asistencias"; ?>" class="a_limpia"><span class='glyphicon glyphicon-ok'></span> Generar reporte asistencia</a><br>
		<a href="<?php echo "$ruta/panel/$user_get/reportes-historial"; ?>" class="a_limpia"><span class='glyphicon glyphicon-time'></span> Generar reporte de historiales</a>

		<br><br>
	<?php	
	}


	if ($nav=="reportes-asistencias") {
		?>
			<div class="col-md-3">
				<p class="texto_principal">Tipo de personal</p>
				<select class='form-control select-sm_user' style='margin-top:0px;'>
					<option>Guardias</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<p class="texto_principal">Inmuebles</p>
				<select class='form-control select-sm_user' style='margin-top:0px;'>
					<option>Guardias</option>
				</select>
			</div>

			<div class="col-md-3">
				<p class="texto_principal">De:</p>
				<input type='date/time' class='form-control input-sm_user' name='nacimiento_date'>
			</div>

			<div class="col-md-3">
				<p class="texto_principal">A:</p>
				<input type='date/time' class='form-control input-sm_user' name='nacimiento_date'>
			</div>		

			<div class="col-md-2" style='padding-top:24px;'>
				  <button style='background-color:#e06000;color:white;' type="button" class="btn btn-default btn-xs">
				  	Generar reporte
				  </button>
			</div>	

		<?php
	}
	if ($nav=="reportes-historial") {
			?>
			<div class="col-md-3">
				<p class="texto_principal"></p>
				<select class='form-control select-sm_user' style='margin-top:0px;'>
					<option>Guardias</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<p class="texto_principal">Inmuebles</p>
				<select class='form-control select-sm_user' style='margin-top:0px;'>
					<option>Guardias</option>
				</select>
			</div>

			<div class="col-md-3">
				<p class="texto_principal">De:</p>
				<input type='date/time' class='form-control input-sm_user' name='nacimiento_date'>
			</div>

			<div class="col-md-3">
				<p class="texto_principal">A:</p>
				<input type='date/time' class='form-control input-sm_user' name='nacimiento_date'>
			</div>		

			<div class="col-md-2" style='padding-top:24px;'>
				  <button style='background-color:#e06000;color:white;' type="button" class="btn btn-default btn-xs">
				  	Generar reporte
				  </button>
			</div>	
			<?php
	}

?>






<!--<center>
	<div style='width:100%; background-color:#f2f2f2;border-radius:3px;padding:1px;'>
		<div class="row">
			<div class="col-md-3 pull-right">
				<select class='form-control select-sm_user' style='margin-top:0px;'>
					<option>Asistencias</option>
				</select>
			</div>
			<div class="col-md-3 pull-right">
				<select class='form-control select-sm_user' style='margin-top:0px;'>
					<option>Guardias</option>
					<option value=""></option>
				</select>
			</div>
		</div>
	</div>
</center>
<div class="row" style='margin-top:20px;'>
	<div class="col-md-6">
		   <div class="form-group">
			    <label class="col-sm-3 control-label"> &nbsp; *Inmuebles</label>
			    <div class="col-sm-9">
			    	<select class='form-control select-sm_user' style='margin-top:0px;'>
						<option></option>
					</select>
			    </div>
		   </div>
	</div>


	<div class="col-md-5 pull-right">
		<div class="form-group">
			    <label class="col-md-3 control-label">*Elementos</label>
			    <div class="col-md-9">
			    	<select class='form-control select-sm_user' style='margin-top:0px;'>
						<option></option>
					</select>
			    </div>
		</div>
	</div>
</div>

<div class="row" style='margin-top:20px;'>
	<div class="col-md-4 col-md-offset-1">
		<label>De: </label>
		<input type='date' class='form-control input-sm_user'>
	</div>

	<div class="col-md-4">
		<label>A: </label>
		<input type='date' class='form-control input-sm_user'>
	</div>

	<div class="col-md-2" style='padding-top:24px;'>
	  <button style='background-color:#e06000;color:white;' type="button" class="btn btn-default btn-xs">
	  	Generar reporte
	  </button>

	</div>
</div>
-->