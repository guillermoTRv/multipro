<?php 
	$userBusqueda = "SELECT * FROM inmuebles WHERE id_inmueble='$estado_checklistInmuebleId'";
	$userEjecutar = mysqli_query($enlace,$userBusqueda);
	$inArray    = mysqli_fetch_array($userEjecutar);

	$name_inmueble = $inArray['name_inmueble'];
	$cliente       = $inArray['cliente'];

	$calle         = $inArray['calle'];
	$colonia       = $inArray['colonia'];
	$num_exterior  = $inArray['num_exterior'];
	$supervisor    = $inArray['supervisor'];
	$empresa       = $inArray['empresa'];
?>	

<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<p style='color:#f2f2f2'>Inmueble: <?php echo $name_inmueble."&nbsp;&nbsp;&nbsp;Empresa - ".$cliente."&nbsp"?> &nbsp;&nbsp; Supervisor: <?php echo $supervisor; ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>
			<hr>
	
			<p class="texto_principal">Estados del checklist</p>
				<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
					    <thead>
					    	<tr style="color:white">	
					    		<th>Categoria</th>
					    		<th>Checklist</th>
					    		<th>Situacion</th>
					    		<th>##</th>
					    	</tr>
					    </thead>
						<tbody>
							<?php 
								$consultaReporte = "SELECT * FROM estados_checklist_inmuebles WHERE id_inmueble='$estado_checklistInmuebleId'";
								$consultaReporte = mysqli_query($enlace,$consultaReporte) or die("no");
								while ($arrayCheck=mysqli_fetch_array($consultaReporte)) {
									$categoria      = $arrayCheck['categoria'];
									$situacion_name	= $arrayCheck['situacion_name'];
									$status_check   = $arrayCheck['status'];

									?>
									<tr>
										<td><?php echo $categoria ?></td>
										<td><?php echo $situacion_name ?></td>
										<td><?php echo $status_check ?></td>
										<td></td>
								    </tr>
									<?php         
								}
							?>
							 
					    </tbody>
				</table>
			<a class="a_limpia" href="<?php echo "$ruta/panel/$user_get/inmuebles-datos-".$estado_checklistInmuebleId; ?>">Regresar</a>	
		</div>
</div>






