<?php 
  session_start();
  $type_user       =  $_SESSION['type_user'];
  if ($type_user == 'administrador') {
      $var_ruta = "admin";
  } 
  if ($type_user == 'cliente') {
      $var_ruta = "cliente";
  }
  $consultaInmSupervisor = "SELECT supervisor FROM inmuebles WHERE name_inmueble='$name_inmueble'";
  $consultaInmSupervisor = mysqli_query($enlace,$consultaInmSupervisor);
  $consultaInmSupervisor = mysqli_fetch_array($consultaInmSupervisor);
  $id_supervisor         = $consultaInmSupervisor['supervisor'];

  $consultaNumImuebles   = "SELECT * FROM inmuebles WHERE supervisor = '$id_supervisor'";
  $consultaNumImuebles   = mysqli_query($enlace,$consultaNumImuebles);
  $consultaNumImuebles   = mysqli_num_rows($consultaNumImuebles);



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
           $edad         = $consultaArray['edad'];
           
           $type_userConsulta = "supervisor";
           include("../../personal/estado_personalBasico.php");

              ?>
                  <tr style='margin-bottom:7px;' <?php echo "ondblclick='myFunction$id_usuario()'"; ?>>
                    <td><?php echo "$nombre_g $apellido_p $apellido_m" ?></td>
                    <td><?php echo "$edad"; ?></td>
                    <td><?php echo "$calle $colonia $num_ext $demarcacion"; ?></td>
                    <td><?php echo "$consultaNumImuebles"; ?></td>
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
                             window.location='$ruta/panel/$var_ruta/supervisor-User-'+document.getElementById('$id_usuario').innerHTML;
                                           }
                       </script>
                       "; ?>
                   <?php


?>