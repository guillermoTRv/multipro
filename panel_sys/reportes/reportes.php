<h4 class='texto_principal'>Generacion de <?php echo $nav."&nbsp;&nbsp;" ;date_default_timezone_set('America/Mexico_City'); echo $fecha_m = date("Y-m-d"); ?> </h4>
<hr>
<div class="col-md-12">
<?php 
	if ($nav=="reportes") {
	?>		
		<a style='font-size:1.1em;' href="<?php echo "$ruta/panel/$user_get/reportes-generales"; ?>" class="a_limpia"><span class='glyphicon glyphicon-asterisk'></span> Reportes generales</a><br><br>
		<a style='font-size:1.1em;' href="<?php echo "$ruta/panel/$user_get/reportes-empleados"; ?>" class="a_limpia"><span class='glyphicon glyphicon-user'></span> Generar reporte de empleados</a><br><br>
		<a style='font-size:1.1em;' href="<?php echo "$ruta/panel/$user_get/reportes-asistencias"; ?>" class="a_limpia"><span class='glyphicon glyphicon-ok'></span> Generar reporte asistencia</a><br><br>
		<a style='font-size:1.1em;' href="<?php echo "$ruta/panel/$user_get/reportes-historial"; ?>" class="a_limpia"><span class='glyphicon glyphicon-time'></span> Generar historial de reportes</a><br><br>
		<a style='font-size:1.1em;' href="<?php echo "$ruta/panel/$user_get/reportes-checklist"; ?>" class="a_limpia"><span class='glyphicon glyphicon-list-alt'></span> Generar reporte checklist</a><br>

		
		<?php 
			if ($type_user=='administrador') {
				# code...
			}
			else{
				?>
				<a href="<?php echo "$ruta/panel/$user_get/reportes-extraordinarios"; ?>" class="a_limpia"><span class='glyphicon glyphicon-file'></span> Generar reporte extra</a>
				<?php	
			}
		?>
		<br><br>
	<?php	
	}

	if ($nav=="reportes-generales") {
		include("panel_sys/reportes/repo_generales/form_generarReporteGenerales.php");echo "<br><br>";
	}
	if ($nav=="reportes-empleados") {
		include("panel_sys/reportes/repo_empleados/form_generarReporteEmpleados.php");
	}
	if ($nav=="reportes-asistencias") {
		include("panel_sys/reportes/repo_asistencia/form_generarReporteAsistencia.php");
	}
	if ($nav=="reportes-historial") {
		include("panel_sys/reportes/repo_historial/form_generarReporteHistorial.php");
	}
	if ($nav=="reportes-extraordinarios") {
		include("panel_sys/reportes/extraordinario/principal_extraordinario.php");
	}
	if ($nav=="reportes-checklist") {
		include("panel_sys/reportes/repo_asistencia/form_generarReporteAsistencia.php");
	}





?>

</div>




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