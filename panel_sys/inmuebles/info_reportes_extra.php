<?php 
	$consultaReporte = "SELECT * FROM reportes_inmuebles_extraordinarios WHERE id_inmueble='$var_consultaInm' and status = 'pendiente'";
	$consultaReporte = mysqli_query($enlace,$consultaReporte) or die("no");
	$consultaReporteCount = mysqli_num_rows($consultaReporte);

	$var = $consultaReporteCount;

	if ($var == 0) {
			echo "<br><p class='texto_principal'>No hay reportes extraordinarios</p>";	
	}
	else {

		?>
			<hr>
			<p class='texto_principal'>Estado reportes extraordinarios</p>
			<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
			    <thead>
			      <tr>
			        <th style='color:white;'>Situacion</th>
			        <th style='color:white'>Fecha de registro</th>
			        <th style='color:white'>Usuario que reporta</th>
			        <th style='color:white'>#</th>        
			      </tr>
			    </thead>
			    <tbody>
			        <?php 
			        	while($arrayRepo = mysqli_fetch_array($consultaReporte)) {
			        		$id_repo_ext = $arrayRepo['id_repo_ext'];
							$type_userT  = $arrayRepo['type_user'];
							$id_usuario  = $arrayRepo['id_personal'];
							if ($type_userT == 'supervisor' or $type_userT == 'guardia') {
							    $nameConsulta  = "SELECT nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE id_usuario = '$id_usuario'";
                                $nameConsulta    = mysqli_query($enlace,$nameConsulta) or die("nop");
                                $nameConsulta    = mysqli_fetch_array($nameConsulta);
                                    $nameUsuario     = $nameConsulta['nombre_g'];
                                    $apellidoP       = $nameConsulta['apellido_p'];
                                    $apellido_M      = $nameConsulta['apellido_m'];

                                    $personalTable = $nameUsuario."&nbsp;".$apellidoP."&nbsp;".$apellido_M;
							}
							if ($type_userT == 'cliente') {
								$nameConsulta  = "SELECT nombre_g,apellido_p,apellido_m FROM clientes_usuarios WHERE id_clienteuser = '$id_usuario'";
                                $nameConsulta    = mysqli_query($enlace,$nameConsulta) or die("nop");
                                $nameConsulta    = mysqli_fetch_array($nameConsulta);
                                    $nameUsuario     = $nameConsulta['nombre_g'];
                                    $apellidoP       = $nameConsulta['apellido_p'];
                                    $apellido_M      = $nameConsulta['apellido_m'];

                                    $personalTable = $nameUsuario."&nbsp;".$apellidoP."&nbsp;".$apellido_M;
							}

							?> 
				                 <tr>
				                   <td><?php echo $texto = $arrayRepo['texto']; ?></td>
				                   <td><?php echo $fecha = $arrayRepo['fecha_registro_bd']; ?></td>
				                   <td><?php echo $type_userT."-".$personalTable; ?></td>
				                   <td>
				                   <?php echo "
										<div id='rep_$id_repo_ext'>
											<form method='post' enctype='multipart/form-data' id='form_rep_$id_repo_ext'>
												<input type='hidden' name='input_rep' value='$id_repo_ext'>
												<button id='btn_rep_$id_repo_ext' style='margin-right:-30px;' type='button' class='btn btn-success btn-xs'>Marcar como atendido</button>
											</form>
				                   			
				                   		</div>
										<script>
											$(function(){
								          		$(document).on('click','#btn_rep_$id_repo_ext',function(){
								                    var url='../../panel_sys/personal/procesar_atendidoReporte.php';
								                    $.ajax({
								                        type:'POST',
								                        url:url,
								                        data:$('#form_rep_$id_repo_ext').serialize(),
								                        success:function(data){
								                            $('#rep_$id_repo_ext').html(data);
								                        }

								                    });

								                    return false;
								                });
								            });
										</script>

										
										"; 
										?>
									<td>	
				                 </tr>
			                <?php
						}	
			        ?>
			    </tbody>
			    
			</table>
		<?php



	  	
	}
?>