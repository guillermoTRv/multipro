<?php 

	$consultaUsuario = "SELECT nombre_g,apellido_p,apellido_m,inmueble_asign FROM usuarios_datos_basicos WHERE id_usuario='$nav_jefeTurno_id'";
	$consultaUsuario = mysqli_query($enlace,$consultaUsuario) or die("no");
	$arrayUsuario    = mysqli_fetch_array($consultaUsuario);
	$nombre_g        = $arrayUsuario['nombre_g'];
	$apellido_p      = $arrayUsuario['apellido_p'];
	$apellido_m      = $arrayUsuario['apellido_m'];
	$nombre_completo = $nombre_g."&nbsp;".$apellido_p."&nbsp;".$apellido_m;
	$inmueble_asign  = $arrayUsuario['inmueble_asign'];


	$id_inmueble     = "SELECT id_inmueble FROM inmuebles WHERE name_inmueble='$inmueble_asign'";
	$id_inmueble     = mysqli_query($enlace,$id_inmueble);
	$id_inmueble     = mysqli_fetch_array($id_inmueble);
	$id_inmueble     = $id_inmueble['id_inmueble'];


	$consultaJefe    = "SELECT * FROM jefe_turno WHERE id_inmueble='$id_inmueble'";
	$consultaJefe    = mysqli_query($enlace,$consultaJefe);
	$consultaJefeN   = mysqli_num_rows($consultaJefe);
?>

<div class="row" style='margin:5px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
		  <div class="form-group" style="text-align: center">
		    <div id="jefeturno">
				<form id='form_jefeturno'>

				<?php  

					
					$input_usuario  = "<input type='hidden' name='id_usuario' value='$nav_jefeTurno_id'>";
					$input_inmueble = "<input type='hidden' name='inmueble' value='$id_inmueble' >";
					$input_nameUser = "<input type='hidden' name='name_user' value='$nombre_completo'>";
					$input_nameInm  = "<input type='hidden' name='name_inmueble' value='$inmueble_asign'>";
					$pregunta       = "<p style='color:white;font-size: 1.2em'>¿Desea asignar al usuario $nombre_completo como jefe de turno para el inmueble $inmueble_asign</p>";
					$button         = "<button style='width:150px;margin-bottom:10px;' id='btn_jefeturno' class='btn btn-primary'>Aceptar</button>";
					$regresar       = "<a href='$ruta/panel/supervisor/User-$nav_jefeTurno_id' class='a_limpia'>Regresar</a>";

					if ($consultaJefeN == 0) {
						echo "<p style='color:white;font-size: 1.2em'>Aun no hay un elemento asignado como jefe de turno para el inmueble</p>";	
						echo "<input type='hidden' name='consulta' value='in'>";
						echo $input_usuario;
						echo $input_inmueble;
						echo $input_nameUser;
						echo $input_nameInm;
						echo $pregunta;
						echo $button;
						echo "<br>".$regresar;
					}
					else{
						$consultaJefeA = mysqli_fetch_array($consultaJefe);
						$personalJefe  = $consultaJefeA['id_personal'];

						if ($personalJefe == $nav_jefeTurno_id) {
							echo "<br><p style='color:white;font-size: 1.2em'>Actualmente $nombre_completo es el jefe de turno del inmueble $inmueble_asign</p>";
							echo $regresar;
						}
						else{
							 							
							$consultaUsuario = "SELECT nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE id_usuario='$personalJefe'";
							$consultaUsuario = mysqli_query($enlace,$consultaUsuario) or die("no");
							$arrayUsuario    = mysqli_fetch_array($consultaUsuario);
							$nombre_g        = $arrayUsuario['nombre_g'];
							$apellido_p      = $arrayUsuario['apellido_p'];
							$apellido_m      = $arrayUsuario['apellido_m'];
							$nombre_jefeTurn = $nombre_g."&nbsp;".$apellido_p."&nbsp;".$apellido_m;
							echo "<input type='hidden' name='consulta' value='up'>";
							echo "<br><p style='color:white;font-size: 1.2em'>Actualmente $nombre_jefeTurn es el jefe de turno del inmueble $inmueble_asign</p>";
							echo $input_usuario;
							echo $input_inmueble;
							echo $input_nameUser;
							echo $input_nameInm;
							echo $pregunta;
							echo $button;
							echo "<br>".$regresar;
						}


					}


				?>



		    	
					<?php
						
						if ($consultaJefeN == 0) {
							
						}
						else{	

							$consultaJefeA = mysqli_fetch_array($enlace,$consultaJefe);
							$personalJefe  = $consultaJefeA['id_personal'];

							
						}

					?>

				    
				</form>
		    </div>
		  </div>
	</div>
</div>
