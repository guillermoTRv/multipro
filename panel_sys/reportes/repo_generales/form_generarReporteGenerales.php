<?php 
	#va por niveles todo
	#un supervisor solo genera reporte de un guardia
	#un cliente solo genera reporte de supervisores y de un guardia
	#un admin pues de todos

	#ojo aqui, tendriamos que hacer algun tipo de validacion para que no se permita si es que se introduce por html un option con una opcion de más, respetar roles y permisos de usuarios 
	
	if ($type_user == "administrador") {
		$option = "
		<option value='cliente'>Cliente</option>
		<option value='supervisor'>Supervisor</option>
		<option value='guardia'>Guardia</option>
		";
	}
	if ($type_user == "cliente") {
		$option = "
		<option value='supervisor'>Supervisor<option>
		<option value='guardia'>Guardia<option>
		";
	}
	if ($type_user == "supervisor") {
		$option = "
		<option value='guardia'>Guardia</option>
		";
	}
	

?>

<form action="../../panel_sys/reportes/repo_generales/generar_repoGenerales.php" method="POST" enctype="multipart/form-data" style="margin-bottom: 10px">
			
			<div class="row">
				<div class="col-md-3">
					<p class="texto_principal">Empresa</p>
					<select id="empresa_repo" class='form-control select-sm_user' style='margin-top:0px;' name="empresa" required>
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
					<p class="texto_principal">De:</p>
					<input type='date/time' name="fechaUno" class='form-control input-sm_user' name='nacimiento_date' required>
				</div>

				<div class="col-md-3">
					<p class="texto_principal">A:</p>
					<input type='date/time' name="fechaDos" class='form-control input-sm_user' name='nacimiento_date' required>
				</div>		
				<div class="col-md-2" style='padding-top:28px;'>
					  <button style='background-color:#e06000;color:white;' type="submit" class="btn btn-default btn-xs">
					  	Generar reporte
					  </button>
				</div>	

			</div>	
</form>
