<?php 
	if ($nav=='personal') {
		echo "<p class='texto_principal'>Seleccione un inmueble en la parte de arriba</p>";
	}
?>
<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
    <thead>
        <tr>   
          <th style='color:white;'>Nombre</th>
          <th style='color:white;'>Edad</th>
          <th style='color:white;'>Domicilio</th>
          <th style='color:white;'>Horario</th>
          <th style='color:white;'>Inmueble</th>
          <th style='color:white;'>#</th>
          </tr>
    </thead>
    <tbody>
	<?php 
		$num_inmueble = substr($nav,9);
		$name_inmueble = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble='$num_inmueble'";
		$name_inmueble = mysqli_query($enlace,$name_inmueble);
		$name_inmueble = mysqli_fetch_array($name_inmueble);
		$name_inmueble = $name_inmueble['name_inmueble']; 

		$consultaGuardias         = "SELECT id_usuario,nombre_g,apellido_p,apellido_m,calle,colonia,num_exterior,demarcacion,turno,inmueble_asign,estado_repo,edad FROM  usuarios_datos_basicos WHERE inmueble_asign='$name_inmueble' and puesto='guardia' ORDER BY id_usuario ASC";
	    $consultaGuardiasEjecutar = mysqli_query($enlace,$consultaGuardias) or die("error");
	        while ($consultaArrayGuardias = mysqli_fetch_array($consultaGuardiasEjecutar)) {
	               $id_usuario   = $consultaArrayGuardias['id_usuario'];
	               $nombre_g     = $consultaArrayGuardias['nombre_g'];
	               $apellido_p   = $consultaArrayGuardias['apellido_p'];
	               $apellido_m   = $consultaArrayGuardias['apellido_m'];
	               $calle        = $consultaArrayGuardias['calle'];
	                                $colonia      = $consultaArrayGuardias['colonia'];
	               $num_ext      = $consultaArrayGuardias['num_exterior'];
	               $demarcacion  = $consultaArrayGuardias['demarcacion'];
	               $turno        = $consultaArrayGuardias['turno'];      
	               $inmueble     = $consultaArrayGuardias['inmueble_asign'];
	               $edad         = $consultaArrayGuardias['edad'];
	                 
	               $type_userConsulta = "guardia";
                   include("panel_sys/personal/estado_personalBasico.php");	
	                ?>
	                    <tr style='margin-bottom:7px;' <?php echo "ondblclick='myFunction$id_usuario()'"; ?>>
		                    <td><?php echo "$nombre_g $apellido_p $apellido_m" ?></td>
		                    <td><?php echo "$edad"; ?></td>
		                    <td><?php echo "$calle $colonia $num_ext $demarcacion"; ?></td>
		                    <td><?php echo "$turno"; ?></td>
		                    <td><?php echo "$inmueble"; ?></td>
		                    <td>
		                      <strong>
		                         <?php echo "<span class='glyphicon glyphicon-asterisk' style='color:$color;'><span id='$id_usuario'style='font-size:.1em;color:rgba(0,0,0,0);'>$id_usuario</span></span>"; ?>
		                      </strong>
		                    </td>
	                  	</tr>
						<?php 
                        echo "
                            <script>
                                function myFunction$id_usuario() 
                                {
                                    window.location='$ruta/panel/supervisor/User-'+document.getElementById('$id_usuario').innerHTML;
                                }
                            </script>
                        "; ?>	                     
	                <?php

	        }

	?>
	</tbody>
</table>