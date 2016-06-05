
                  <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>
                          <th style='color:white;'>----</th>   
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
                        $consultaGuardias         = "SELECT id_usuario,nombre_g,apellido_p,apellido_m,calle,colonia,num_exterior,demarcacion,horario_laboral,inmueble_asign,estado_repo FROM  usuarios_datos_basicos WHERE empresa='$getEmpresa' ORDER BY id_usuario ASC";
                        $consultaGuardiasEjecutar = mysqli_query($enlace,$consultaGuardias) or die("No mames");
                        while ($consultaArray = mysqli_fetch_array($consultaGuardiasEjecutar)) {
                                $id_usuario   = $consultaArray['id_usuario'];
                                $nombre_g     = $consultaArray['nombre_g'];
                                $apellido_p   = $consultaArray['apellido_p'];
                                $apellido_m   = $consultaArray['apellido_m'];
                                $calle        = $consultaArray['calle'];
                                $colonia      = $consultaArray['colonia'];
                                $num_ext      = $consultaArray['num_ext'];
                                $demarcacion  = $consultaArray['demarcacion'];
                                $horario      = $consultaArray['horario_laboral'];      
                                $inmueble     = $consultaArray['inmueble_asign'];
                                $estado       = $consultaArray['estado_repo'];
                                  if ($estado == 'si') {global $color; $color = 'green';}
                                  if ($estado == 'no') {global $color; $color = '#DF0101';}

                                ?>
                                    <tr style='margin-bottom:7px;' <?php echo "ondblclick='myFunction$id_usuario()'"; ?>>
                                      <td><input type="checkbox"></td>
                                      <td><?php echo "$nombre_g $apellido_p $apellido_m" ?></td>
                                      <td><?php echo "20"; ?></td>
                                      <td><?php echo "$calle $colonia $num_ext $demarcacion"; ?></td>
                                      <td><?php echo "$horario"; ?></td>
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
                                                      window.location='$ruta/panel/$user_get/personal-User-'+document.getElementById('$id_usuario').innerHTML;
                                                  }
                                              </script>
                                              "; ?>
                                <?php

                        }
                        
                      ?>
                        
                    </tbody>
                  </table>