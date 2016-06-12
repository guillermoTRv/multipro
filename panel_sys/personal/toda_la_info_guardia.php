<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
	<?php 
		include("panel_sys/personal/datos_guardiaInfo.php"); 
		$variable_id = $personal_user_id;
	?>			
			
	<?php 
		$consultaReporte = "SELECT * FROM reportes_inmuebles_extraordinarios WHERE id_personal='$personal_user_id' and status = 'pendiente' and type_user='guardia'";
		$consultaReporte = mysqli_query($enlace,$consultaReporte) or die("no");
		$consultaReporteCount = mysqli_num_rows($consultaReporte);

		$var = $consultaReporteCount;

		if ($var == 0) {
						
		}
		else {

			?>
				<hr>
				<p class='texto_principal'>Estado reportes</p>
				<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
				    <thead>
				      <tr style="color:white">    
				        <th>Situacion</th>
				        <th>Fecha de registro</th>      
				      </tr>
				    </thead>
				    <tbody>
				        <?php 
				        	while($arrayRepo = mysqli_fetch_array($consultaReporte)) {
								 ?> 
					                 <tr>
					                   <td><?php echo $texto = $arrayRepo['texto']; ?></td>
					                   <td><?php echo $fecha = $arrayRepo['fecha_registro_bd']; ?></td>
					                 </tr>
				                 <?php
							}	
				        ?>
				    </tbody>
				</table>
			<?php
		  	
		}
	?>
	</div>

</div>