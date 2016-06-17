<hr>	
	<p class="texto_principal">Estados del checklist</p>
		<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
		    <thead>
		    	<tr style="color:white">	
		    		<th>Categoria</th>
		    		<th>Checklist</th>
		    		<th>Situacion</th>
					<th>#</th>
				</tr>
			</thead>
		<tbody>
		<?php 
			$consultaReporte = "SELECT * FROM estados_checklist_inmuebles WHERE id_inmueble='$var_consultaInm'";
			$consultaReporte = mysqli_query($enlace,$consultaReporte) or die("no");
			while ($arrayCheck=mysqli_fetch_array($consultaReporte)) {
					$id_estadoCheck = $arrayCheck['id_eci'];
				    $categoria      = $arrayCheck['categoria'];
					$situacion_name	= $arrayCheck['situacion_name'];
					$status_check   = $arrayCheck['status'];
					?>
						<tr>
							<td><?php echo $categoria ?></td>
							<td><?php echo $situacion_name ?></td>
							<td><?php echo $status_check ?></td>
							<td>
				                   <?php
				                   		if ($status_check == 'sin novedad') {
				                   		echo "------------";
				                   		}
				                   		else{
				                   		echo "
										<div id='rep_$id_estadoCheck'>
											<form method='post' enctype='multipart/form-data' id='form_rep_$id_estadoCheck'>
												<input type='hidden' name='input_rep' value='$id_estadoCheck'>
												<button id='btn_rep_$id_estadoCheck' style='margin-right:-30px;' type='button' class='btn btn-success btn-xs'>Marcar como atendido</button>
											</form>
				                   			
				                   		</div>
										<script>
											$(function(){
								          		$(document).on('click','#btn_rep_$id_estadoCheck',function(){
								                    var url='../../panel_sys/inmuebles/procesar_atendidoChecklist.php';
								                    $.ajax({
								                        type:'POST',
								                        url:url,
								                        data:$('#form_rep_$id_estadoCheck').serialize(),
								                        success:function(data){
								                            $('#rep_$id_estadoCheck').html(data);
								                        }

								                    });

								                    return false;
								                });
								            });
										</script>
										";
										}
								   ?>
							</td>
						</tr>
					<?php         
			}
		?>					 
		</tbody>
</table>
