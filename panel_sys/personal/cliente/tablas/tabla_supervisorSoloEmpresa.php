<?php 
	$consultaInmueblesSup = "SELECT name_inmueble,supervisor FROM inmuebles WHERE empresa = '$id_cliente' and supervisor!='aun no cuenta' ORDER BY id_inmueble ASC";
	$consultaInmueblesSup = mysqli_query($enlace,$consultaInmueblesSup);
	while ($arrayConsultaSup = mysqli_fetch_array($consultaInmueblesSup)) {
		   
		   $id_supervisor    = $arrayConsultaSup['supervisor'];
       $name_inmueble    = $arrayConsultaSup['name_inmueble'];
			   
		   $consultaImuebles   = "SELECT name_inmueble FROM inmuebles WHERE supervisor = '$id_supervisor'";
		   $consultaImuebles   = mysqli_query($enlace,$consultaImuebles);
		   $consultaImuebles   = mysqli_fetch_array($consultaImuebles);
       $consultaImuebles   = $consultaImuebles['name_inmueble'];

 		   $consultaSupervisor = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$id_supervisor'";
		   $consultaSupervisor = mysqli_query($enlace,$consultaSupervisor);
		   $consultaArray      = mysqli_fetch_array($consultaSupervisor);


           $id_usuario   = $consultaArray['id_usuario'];
           $nombre_g     = $consultaArray['nombre_g'];
           $apellido_p   = $consultaArray['apellido_p'];
           $apellido_m   = $consultaArray['apellido_m'];
           $calle        = $consultaArray['calle'];
           $colonia      = $consultaArray['colonia'];
           $num_ext      = $consultaArray['num_exterior'];
           $demarcacion  = $consultaArray['demarcacion'];
           $inmueble     = $consultaArray['inmueble_asign'];
           $estado       = $consultaArray['estado_repo'];
           $edad         = $consultaArray['edad'];
           
           if ($estado == 'si') {global $color; $color = 'green';}
           if ($estado == 'no') {global $color; $color = '#DF0101';}

              ?>
                  <tr style='margin-bottom:7px;' <?php echo "ondblclick='myFunction$id_usuario()'"; ?>>
                    <td><?php echo "$nombre_g $apellido_p $apellido_m" ?></td>
                    <td><?php echo "$calle $colonia $num_ext $demarcacion"; ?></td>
                    <td><?php echo "$name_inmueble"; ?></td>
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
                             window.location='$ruta/panel/cliente/supervisor-User-'+document.getElementById('$id_usuario').innerHTML;
                                           }
                       </script>
                       "; ?>
                   <?php



	}



?>