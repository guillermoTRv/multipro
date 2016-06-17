<?php

	function buscar_inmueble($enlace,$id_inmueble){
		$conInmueble = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble ='$id_inmueble'";
		$conInmueble = mysqli_query($enlace,$conInmueble) or die("no");
		$conInmueble = mysqli_fetch_array($conInmueble);
	    $name_inmueble = $conInmueble['name_inmueble'];
	    echo "<td>$name_inmueble</td>";
	}



	if (isset($personal_user)) {
		$type_userConsulta = 'guardia';
		$id_personalCons   = $personal_user_id;

	}
	if (isset($user_datos)) {
		$type_userConsulta = 'guardia';
		$id_personalCons   = $personal_user_id;	
	}
	if (isset($supervisor_user)) {
		$type_userConsulta = 'supervisor';
		$id_personalCons   = $supervisor_user_id;
	}
	if (isset($cliente_user)) {
		$type_userConsulta = 'cliente';
		$id_personalCons   = $cliente_user_id;
	}


	$consultaReporte = "SELECT * FROM reportes_inmuebles_extraordinarios WHERE id_personal='$id_personalCons' and status = 'pendiente' and type_user='$type_userConsulta'";
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
			      <tr style='color:white;'>
			        <th>Situacion</th>
			        <th>Fecha de registro</th>
			        <?php if ($type_userConsulta == 'cliente' or $type_userConsulta == 'supervisor') {echo "<th>Inmueble</th>";} ?>
			        <th>#</th>        
			      </tr>
			    </thead>
			    <tbody>
			        <?php 
			        	while($arrayRepo = mysqli_fetch_array($consultaReporte)) {
							 $id_repo_ext   = $arrayRepo['id_repo_ext'];
							 $type_userRepo = $arrayRepo['type_user']; 
							 $id_inmueble   = $arrayRepo['id_inmueble'];   
							 ?> 
				                <tr>
				                   	<td><?php echo $texto = $arrayRepo['texto']; ?></td>
				                   	<td><?php echo $fecha = $arrayRepo['fecha_registro_bd']; ?></td>
				                   
				                   		<?php 
				                   			if ($type_userConsulta == 'cliente' or $type_userConsulta == 'supervisor') 
				                   				{
				                   					buscar_inmueble($enlace,$id_inmueble);

				                   				} 
				                   		?>
				                   	
				                   	<td>

										<?php echo "
										<div id='rep_$id_repo_ext'>
											<form method='post' enctype='multipart/form-data' id='form_rep_$id_repo_ext'>
												$toquen
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
				                   	</td>
				                </tr>
			                 <?php
						}	
			        ?>
			    </tbody>
			</table>
		<?php
	  	
	}
?>