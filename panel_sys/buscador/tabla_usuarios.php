    <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;margin-top:15px;'>
       <thead>
          <tr>   
            <th style='color:white;'>Nombre</th>
            <th style='color:white;'>Edad</th>
            <th style='color:white;'>Domicilio</th>
            <th style='color:white;'>Horario</th>
            <th style='color:white;'>#</th>
          </tr>
       </thead>
      <tbody id="listado_personal">

        <?php
  
          if ($type_user == 'administrador') {
              $var_ruta = "admin";
          } 
          if ($type_user == 'cliente') {
              $var_ruta = "cliente";
          }
          if ($type_user == 'supervisor') {
              $var_ruta = "supervisor";
          }

          $consultaGuardias         = "SELECT id_usuario,nombre_g,apellido_p,apellido_m,calle,colonia,num_exterior,demarcacion,turno,inmueble_asign,estado_repo,edad FROM  usuarios_datos_basicos WHERE id_usuario='$idUs' ORDER BY id_usuario ASC";
                                $consultaGuardiasEjecutar = mysqli_query($enlace,$consultaGuardias) or die("error");
                                while ($consultaArray = mysqli_fetch_array($consultaGuardiasEjecutar)) {
                                        $id_usuario   = $consultaArray['id_usuario'];
                                        $nombre_g     = $consultaArray['nombre_g'];
                                        $apellido_p   = $consultaArray['apellido_p'];
                                        $apellido_m   = $consultaArray['apellido_m'];
                                        $calle        = $consultaArray['calle'];
                                        $colonia      = $consultaArray['colonia'];
                                        $num_ext      = $consultaArray['num_exterior'];
                                        $demarcacion  = $consultaArray['demarcacion'];
                                        $turno        = $consultaArray['turno'];      
                                        $inmueble     = $consultaArray['inmueble_asign'];
                                        $edad         = $consultaArray['edad'];
                                        
                                        $type_userConsulta = "guardia";
                                        include("panel_sys/personal/estado_personalBasico.php");                                    
                                        ?>
                                            <tr style='margin-bottom:7px;' <?php echo "ondblclick='myFunction$id_usuario()'"; ?>>
                                              <td><?php echo "$nombre_g $apellido_p $apellido_m" ?></td>
                                              <td><?php echo "$edad"; ?></td>
                                              <td><?php echo "$calle $colonia $num_ext $demarcacion"; ?></td>
                                              <td><?php echo "$turno"; ?></td>
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
                                                              window.location='$ruta/panel/$var_ruta/personal-User-'+document.getElementById('$id_usuario').innerHTML;
                                                          }
                                                      </script>
                                                      "; ?>
                                        <?php

                                }
        ?>










      </tbody>
    </table>