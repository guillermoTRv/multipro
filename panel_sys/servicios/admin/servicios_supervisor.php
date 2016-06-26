<?php 
	$costoSuper = "SELECT costo_normal,costo_fin_semana FROM costos_supervisor WHERE type_user='supervisor'";
	$costoSuper = mysqli_query($enlace,$costoSuper);
	$costoSuper = mysqli_fetch_array($costoSuper);

	$costo_normal     = $costoSuper['costo_normal'];
	$costo_fin_semana = $costoSuper['costo_fin_semana'];

?>
<div class="row" style='margin-top:30px;' style='border:solid 1px #e06000;'>
  <div>
	<div class="col-md-6">
		<p style='text-align:center;font-size:1.1em;color:#f2f2f2;'>Costos normales</p>
		<div class="row" style='background-color:#E6E6E6;margin:20px;border-radius:4px;'>
			<div class="col-md-12" style='padding:12px;'>
				<form lass="form-horizontal" id="form_costosServicioSupervisor">
					<input type="hidden" value='1' name='type_costo'>
					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-3">Supervisores</label>
					    <div class="col-sm-9">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='costo_normal' value='<?php echo $costo_normal; ?>'>
						  </div>
					    </div>
					</div>
					<div class="form-group pull-right" style="margin-top:16px">
						<div class="col-md-5">
							<button type="submit" class="btn btn-default" id="guardar_servicioSupervisor">Guardar cambios</button>
						</div>	
					</div>
					<p style='color:#E6E6E6;'>---</p>
					<div class="form-group pull-right" style="margin-top:16px;">
						<div class="col-md-12">
							<div  id="mensaje_ss">
					
				    		</div>
						</div>	
					</div>
				</form>

			</div>
			
		</div>
		<br>
		<p style='text-align:center;font-size:1.1em;color:#f2f2f2;'>Penalización por inasistencia</p>
		<div class="row" style='background-color:#E6E6E6;margin:20px;border-radius:4px;'>
			<div class="col-md-12" style='padding:12px;'>
				<form lass="form-horizontal" id="form_costosServicioSupervisor">
					<input type="hidden" value='1' name='type_costo'>
					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-3">Supervisores</label>
					    <div class="col-sm-9">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='costo_normal' value='<?php echo $costo_normal; ?>'>
						  </div>
					    </div>
					</div>
					<div class="form-group pull-right" style="margin-top:16px">
						<div class="col-md-5">
							<button type="submit" class="btn btn-default" id="guardar_servicioSupervisor">Guardar cambios</button>
						</div>	
					</div>
					<p style='color:#E6E6E6;'>---</p>
					<div class="form-group pull-right" style="margin-top:16px;">
						<div class="col-md-12">
							<div  id="mensaje_ss">
					
				    		</div>
						</div>	
					</div>
				</form>

			</div>
			
		</div>
	</div>

	<div class="col-md-6">
		<p style='text-align:center;font-size:1.1em;color:#f2f2f2;'>Costos extraordinarios</p>
		<div class="row" style='background-color:#E6E6E6;margin:20px;border-radius:4px;'>
			<div class="col-md-12" style='padding:12px;'>
				<form lass="form-horizontal" id="form_costosServicioSupervisorExt">
					<input type="hidden" value='2' name='type_costo'>
					<!--
					<div class="form-group">
						    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-7">Supervisor día normal</label>
						    <div class="col-sm-5">
						      <div class="input-group input-group-sm">
							  	<span class="input-group-addon">$</span>
							  	<input type="text" class="form-control">
							  </div>
						    </div>
					</div>-->

					<div class="form-group">
						<label style='color:#202122;margin-top:4px;' class="control-label col-sm-7">Supervisor fin de semana</label>
						<div class="col-sm-5">
						      <div class="input-group input-group-sm">
							  	<span class="input-group-addon">$</span>
							  	<input type="text" class="form-control" name="fin_semana" value="<?php echo $costo_fin_semana ?>">
							  </div>
						</div>
					</div>

					<div class="form-group pull-right" style="margin-top:16px">
						<div class="col-md-5">
							<button type="submit" class="btn btn-default" id="guardar_servicioSupervisorExt">Guardar cambios</button>
						</div>	
					</div>
 					<div class="form-group pull-right" style="margin-top:16px;">
						<div class="col-md-12">
							<div  id="mensaje_ssExt">
					
				    		</div>
						</div>	
					</div>
				</form>
			</div>
		</div>
	</div>
  