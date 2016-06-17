<?php 
	if ($nav == "servicios-guardia-1") {
		$guardia = "guardia_uno";	
		$type_userServ = "guardia1";
	}
	if ($nav == "servicios-guardia-2") {
		$guardia = "guardia_dos";
		$type_userServ = "guardia2";
	}

	$consultaServicios = "SELECT * FROM costos_elementos WHERE type_user='$type_userServ'";
	$consultaServicios = mysqli_query($enlace,$consultaServicios);
	$arrayServicios    = mysqli_fetch_array($consultaServicios);
	
	$costo_guardia     = $arrayServicios['guardia'];
	$pantalon_normal   = $arrayServicios['pantalon_normal'];
	


	$pantalon_comando  = $arrayServicios['pantalon_comando'];
	$camisa_sectores   = $arrayServicios['camisa_sectores'];
	$playera_polo      = $arrayServicios['playera_polo'];
	$corbata           = $arrayServicios['corbata'];
	$cordon_mando      = $arrayServicios['cordon_mando'];
	$kepi              = $arrayServicios['kepi'];
	$gorra             = $arrayServicios['gorra']; 
	$chamarra          = $arrayServicios['chamarra'];
	$botas             = $arrayServicios['botas'];
	$guardia_fin       = $arrayServicios['guardia_fin_semana'];

?>

<div class="row" style='margin-top:30px;' style='border:solid 1px #e06000;'>
  <div>
	<div class="col-md-6">
		<p style='text-align:center;font-size:1.1em;color:#f2f2f2;'>Costos normales</p>
		<div class="row" style='background-color:#E6E6E6;margin:20px;border-radius:4px;'>
			<div class="col-md-12" style='padding:12px;'>
				<form lass="form-horizontal" id='form_costosServicioGuardia' method="POST" enctype="multipart/form-data">
					<?php echo "<input type='hidden' value='$type_userServ' name='type_userServ'>"; ?>
					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-3">Guardia</label>
					    <div class="col-sm-9">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='guardia' value="<?php echo $costo_guardia ?>">
						  </div>
					    </div>
					</div>


					<p style='color:#E6E6E6;'>---</p>
					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Pantalon normal</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='pantalon_normal' value="<?php echo $pantalon_normal ?>">
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Pantalon comando</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='pantalon_comando' value="<?php echo $pantalon_comando ?>">
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Camisa C/Sectores</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='camisa_sectores' value="<?php echo $camisa_sectores ?>">
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Playera Polo</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control"  name='playera_polo' value="<?php echo $playera_polo ?>">
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Corbata</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control"  name='corbata' value="<?php echo $corbata ?>">
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Cordon de mando</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='cordon_mando' value='<?php echo $cordon_mando ?>'>
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Kepi C/Sector</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='kepi' value='<?php echo $kepi ?>'>
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Gorra C/Sector</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name="gorra" value="<?php echo $gorra ?>">
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Chamarra</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='chamarra' value="<?php echo $chamarra ?>">
						  </div>
					    </div>
					</div>

					<div class="form-group">
					    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-5">Botas</label>
					    <div class="col-sm-7">
					      <div class="input-group input-group-sm">
						  	<span class="input-group-addon">$</span>
						  	<input type="text" class="form-control" name='botas' value='<?php echo $botas ?>'>
						  </div>
					    </div>
					</div>

					<div class="form-group pull-right" style="margin-top:16px;">
						<div class="col-md-12">
							<button type="submit" id="guardar_servicioGuardia" class="btn btn-default">Guardar cambios</button>
						</div>	
					</div>
					<div class="form-group pull-right" style="margin-top:16px;">
						<div class="col-md-12">
							<div  id="mensaje_sg">
					
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
			<div class="col-md-12" style='padding:25px 12px 25px 12px;'>
		
				<form id='form_costosServicioGuardiaExtra' method="POST" enctype="multipart/form-data">
					<?php echo "<input type='hidden' value='$type_userServ' name='type_userServ'>"; ?>
					<div class="form-group">
						    <label style='color:#202122;margin-top:4px;' class="control-label col-sm-7">Guardia fin de semana</label>
						    <div class="col-sm-5">
						      <div class="input-group input-group-sm">
							  	<span class="input-group-addon">$</span>
							  	<input type="text" class="form-control" name="fin_semana" value="<?php echo $guardia_fin ?>">
							  </div>
						    </div>
					</div>
					<br>
					<div class="form-group pull-right" style="margin-top:15px">
						<div class="col-md-5">
							<button type="submit" id='guardar_servicioGuardiaExtra' class="btn btn-default">Guardar cambios</button>
						</div>	
					</div>
					<div class="form-group pull-right" style="margin-top:16px;">
						<div class="col-md-12">
							<div id="mensaje_sgExt">
					
				    		</div>
						</div>	
					</div>
					
				</form>
			</div>
		</div>
	</div>
  
</div>