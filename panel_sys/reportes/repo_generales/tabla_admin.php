 <tr>
		<td><strong>Inmueble</strong></td>
	    <td><strong>Direccion</strong></td>
	    <td><strong>Supervisor</strong></td>
	    <td><strong>Jefe de turno</strong></td>
	    <td><strong>Plantilla</strong></td>
	    <td><strong>Turno 24</strong></td>
	    <td><strong>Turno 12</strong></td>
	    <td><strong>Checklist</strong></td>
	    <td><strong>Extraordinario</strong></td>
	    <td><strong>Inasistencia</strong></td>
	    <td><strong>Fecha de inicio</strong></td>
	    <td><strong>Costo del servicio mensual</strong></td>
	    <td><strong>Penalizacion por inasistencia</strong></td>
</tr>
<?php 
		$consultaInmuebles = "SELECT * FROM inmuebles WHERE empresa='$empresaGet' order by id_inmueble asc";
		$consultaInmuebles = mysqli_query($enlace,$consultaInmuebles) or die("---");
		while ($array = mysqli_fetch_array($consultaInmuebles)) {
			   		   
			    $id_inmueble   = $array['id_inmueble'];
			    $nombre        = $array['name_inmueble'];
                $calle         = $array['calle'];
                $colonia       = $array['colonia'];
                $num_exterior  = $array['num_exterior'];
                $num_interior  = $array['num_interior'];
                $demarcacion   = $array['demarcacion'];


                $id_supervisor = $array['supervisor'];
                

                /******************************************************************************************************/

                if ($id_supervisor != "Aun no cuenta") {
                    $nameConsulta  = "SELECT nombre_g,apellido_p,apellido_m,fecha_inicio_contrato,costo_serv FROM usuarios_datos_basicos WHERE id_usuario = '$id_supervisor'";
                    $nameConsulta    = mysqli_query($enlace,$nameConsulta) or die("nop");
                    $nameConsulta    = mysqli_fetch_array($nameConsulta);
                    $nameUsuario     = $nameConsulta['nombre_g'];
                    $apellidoP       = $nameConsulta['apellido_p'];
                    $apellido_M      = $nameConsulta['apellido_m'];
                    $fecha_inicio    = $nameConsulta['fecha_inicio_contrato'];
                    $costo_servicio  = $nameConsulta['costo_serv'];

                    #$supervisorTable = $id_supervisor;
                    $supervisorTable = $nameUsuario."&nbsp;".$apellidoP."&nbsp;".$apellido_M;

                }
                else{
                    $supervisorTable = $id_supervisor;
                }


                /******************************************************************************************************/


	            $jefeTurno  = "SELECT * FROM jefe_turno WHERE id_inmueble='$id_inmueble'";
	            $jefeTurno  = mysqli_query($enlace,$jefeTurno);
	            $jefeTurnoN = mysqli_num_rows($jefeTurno);

	              if ($jefeTurnoN == 0) {
	                  $table_jefeTurno = "Aun no cuenta";  
	          
	              }
	              else{
	                  $jefeTurnoA      = mysqli_fetch_array($jefeTurno);
	                  $id_personalJefe = $jefeTurnoA['id_personal'];

	                  $nameConsultaJ    = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario = '$id_personalJefe'";
	                  $nameConsultaJ    = mysqli_query($enlace,$nameConsultaJ) or die("nop");
	                  $nameConsultaJ    = mysqli_fetch_array($nameConsultaJ);
	                  $nameUsuarioJ     = $nameConsultaJ['nombre_g'];
	                  $apellidoPJ       = $nameConsultaJ['apellido_p'];
	                  $apellido_MJ      = $nameConsultaJ['apellido_m'];

	                  $table_jefeTurno  = $nameUsuarioJ."&nbsp;".$apellidoPJ."&nbsp;".$apellido_MJ;
	             

	              }

                /******************************************************************************************************/


                $conteoPlantilla = "SELECT id_usuario FROM usuarios_datos_basicos WHERE inmueble_asign ='$nombre' and puesto='guardia'";
                $conteoPlantilla = mysqli_query($enlace,$conteoPlantilla);
                $conteoPlantilla = mysqli_num_rows($conteoPlantilla);


                /******************************************************************************************************/

				$conteoTurno24 = "SELECT id_usuario FROM usuarios_datos_basicos WHERE inmueble_asign ='$nombre' and puesto='guardia' and horario_laboral='24'";
                $conteoTurno24 = mysqli_query($enlace,$conteoTurno24);
                $conteoTurno24 = mysqli_num_rows($conteoTurno24);


                $conteoTurno12 = "SELECT id_usuario FROM usuarios_datos_basicos WHERE inmueble_asign ='$nombre' and puesto='guardia' and horario_laboral='12'";
                $conteoTurno12 = mysqli_query($enlace,$conteoTurno12);
                $conteoTurno12 = mysqli_num_rows($conteoTurno12);

                /******************************************************************************************************/

                	#checklist

                /******************************************************************************************************/

                $rangoReportes = "SELECT * FROM reportes_inmuebles_extraordinarios WHERE id_inmueble='$id_inmueble' and fecha_registro_bd BETWEEN '$fechaUnoRepo' AND '$fechaDosRepo'";
                $rangoReportes = mysqli_query($enlace,$rangoReportes) or die("--");
                $rangoReportes = mysqli_num_rows($rangoReportes);

                /******************************************************************************************************/
                	#asistencia

                /******************************************************************************************************/


                ?>
				<tr>
					<td><?php echo $nombre ?></td>
					<td><?php echo $calle."&nbsp;".$num_exterior."&nbsp;".$colonia."&nbsp;".$demarcacion ?></td>
					<td><?php echo $supervisorTable; ?></td>
					<td><?php echo $table_jefeTurno; ?></td>
					<td><?php echo $conteoPlantilla; ?></td>
					<td><?php echo $conteoTurno24 ?></td>
					<td><?php echo $conteoTurno12 ?></td>
					<td>100</td>
					<td><?php echo $rangoReportes ?></td>
					<td>0</td>
					<td><?php echo $fecha_inicio ?></td>
					<td><?php echo $costo_servicio ?></td>
					<td>-$300</td>
				</tr>

				
			
		

                <?php


		}
	
?>