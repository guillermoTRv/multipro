                  <p class='texto_principal'>Solo se enlistan los supervisores que tienen a su cargo un inmueble relacionado con <?php echo $user_get ?></p>
                  <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>   
                          <th style='color:white;'>Nombre</th>
                          <th style='color:white;'>Edad</th>
                          <th style='color:white;'>Domicilio</th>
                          <th style='color:white;'>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $consultaInmueblesC   = "SELECT distinct supervisor FROM inmuebles WHERE empresa = '$getEmpresa' and supervisor!='Aun no cuenta'";
                        $consultaInmueblesE   = mysqli_query($enlace,$consultaInmueblesC) or die("holaaaaa");
                        while ($consultaInmueblesA = mysqli_fetch_array($consultaInmueblesE)) {
                             
                             $supervisor_id = $consultaInmueblesA['supervisor'];

                             $consultaUsuariosC = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$supervisor_id'";
                             $consultaUsuariosE = mysqli_query($enlace,$consultaUsuariosC);
                             $consultaArray = mysqli_fetch_array($consultaUsuariosE);

                                $id_usuario   = $consultaArray['id_usuario'];
                                $nombre_g     = $consultaArray['nombre_g'];
                                $apellido_p   = $consultaArray['apellido_p'];
                                $apellido_m   = $consultaArray['apellido_m'];
                                $calle        = $consultaArray['calle'];
                                $colonia      = $consultaArray['colonia'];
                                $num_ext      = $consultaArray['num_ext'];
                                $demarcacion  = $consultaArray['demarcacion'];
                                $inmueble     = $consultaArray['inmueble_asign'];
                                $estado       = $consultaArray['estado_repo'];
                                $edad         = $consultaArray['edad'];
                                  if ($estado == 'si') {global $color; $color = 'green';}
                                  if ($estado == 'no') {global $color; $color = '#DF0101';}

                                ?>
                                    <tr style='margin-bottom:7px;' <?php echo "ondblclick='myFunction$id_usuario()'"; ?>>
                                      <td><?php echo "$nombre_g $apellido_p $apellido_m" ?></td>
                                      <td><?php echo "$edad"; ?></td>
                                      <td><?php echo "$calle $colonia $num_ext $demarcacion"; ?></td>
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
                                                      window.location='$ruta/panel/$user_get/supervisor-User-'+document.getElementById('$id_usuario').innerHTML;
                                                  }
                                              </script>
                                              "; ?>
                                <?php
                        }

                        
                      ?>
                    
                    </tbody>
                  </table>  

                   