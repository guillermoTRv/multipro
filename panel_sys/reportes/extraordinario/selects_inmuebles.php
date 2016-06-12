<?php 
	if ($type_user=="cliente") {
		?>
		<div class="row" style="margin-top:15px">
			<div class="col-md-3">
				<label>Empresa</label>
				<select id="cliente_reporteCliente" class="form-control select-sm_user" style='margin:0px;' name='empresa_reportes'>
					<option value="">--</option>
					<?php 
						$clientesConsulta = "SELECT id_cliente,name_cliente FROM clientes";
						$clientesConsulta = mysqli_query($enlace,$clientesConsulta);
						while ($clientesArray = mysqli_fetch_array($clientesConsulta)) {
							      
							   $id_cliente    = $clientesArray['id_cliente'];
							   $name_cliente  = $clientesArray['name_cliente'];

								echo "<option value='$id_cliente'>$name_cliente</option>";
						}
					?>
				</select>
			</div>

			<div class="col-md-3">
				<label>Inmuebles</label>
				<select id="inmuebles_reporteCliente" class="form-control select-sm_user" name='inmueble_reporte' style='margin:0px;' >
					
				</select>
			</div>
		</div>
		<?php
	}
	if ($type_user=="supervisor") {
		?>
		<div class="row" style="margin-top:15px">
			<div class="col-md-3">
				<label>Inmueble</label>
				<select class="form-control select-sm_user" style='margin:0px;' name='inmueble_reporte'>
				<option value=''>--</option>
				<?php
					$inmueblesEncargados  = "SELECT id_inmueble,name_inmueble FROM inmuebles WHERE supervisor='$id_personal' ";
					$inmueblesEncargados  = mysqli_query($enlace,$inmueblesEncargados);
					while ($arrayConsulta = mysqli_fetch_array($inmueblesEncargados)) {
						   $id_inmueble   = $arrayConsulta['id_inmueble'];
						   $name_inmueble = $arrayConsulta['name_inmueble'];

						   echo "<option value='$id_inmueble'>$name_inmueble</option>";

					}
				?>
				</select>
			</div>
		</div>	
		<?php
	}
?>