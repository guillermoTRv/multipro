		<form action="../../panel_sys/reportes/repo_empleados/generar_repoEmpleados.php" method="POST" enctype="multipart/form-data">
		 	<div class="row" style="padding:7px">
				<div class="col-md-3">
					<p class="texto_principal">Empresa</p>
					<select id="empresa_repo" class='form-control select-sm_user' style='margin-top:0px;'>
						<option value="">--</option>
						<?php  
							$consultaEmpresa = "SELECT id_cliente,name_cliente FROM clientes";
							$consultaEmpresa = mysqli_query($enlace,$consultaEmpresa);
							while ($ar = mysqli_fetch_array($consultaEmpresa)) {
								$id_cliente   = $ar['id_cliente'];
								$name_cliente = $ar['name_cliente'];
								echo "<option value='$id_cliente'>$name_cliente</option>";
							}
						?>
					</select>
				</div>			

				<div class="col-md-3">
					<p class="texto_principal">Inmuebles</p>
					<select name="inmueble" id="inmueble_repo" class='form-control select-sm_user' style='margin-top:0px;' required>
						
					</select>
				</div>

				<div class="col-md-3">
					<p class="texto_principal">De:</p>
					<input type='date/time' name="fechaUno" class='form-control input-sm_user' name='nacimiento_date' required>
				</div>

				<div class="col-md-3">
					<p class="texto_principal">A:</p>
					<input type='date/time' name="fechaDos" class='form-control input-sm_user' name='nacimiento_date' required>
				</div>		

				<div class="col-md-2" style='padding-top:24px;'>
					  <button style='background-color:#e06000;color:white;' type="submit" class="btn btn-default btn-xs">
					  	Generar reporte
					  </button>
				</div>
			</div>	
		</form>
		<br><br>