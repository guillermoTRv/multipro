<?php 
  $name_inmueble = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble= '$personal_bajas_id'";
  $name_inmueble = mysqli_query($enlace,$name_inmueble);
  $name_inmueble = mysqli_fetch_array($name_inmueble);
  $name_inmueble = $name_inmueble['name_inmueble'];
?>
<div class="row">
  <div class="col-md-12">
    <h4 class="texto_principal">
      Baja de elementos - guardias para Inmueble <?php echo $name_inmueble ?>
      <hr>
    </h4>
  </div>
  <div class="col-md-3">
    <label>Empresa</label>
    <select id="cliente_personalBaja" class="form-control select-sm_user" style='margin:0px;' >
      <option value="">--</option>
      <?php 
        $clientesConsulta = "SELECT id_cliente,name_cliente FROM clientes";
        $clientesConsulta = mysqli_query($enlace,$clientesConsulta);
        while ($clientesArray = mysqli_fetch_array($clientesConsulta)) {
                
             $id_cliente    = $clientesArray['id_cliente'];
             $name_cliente  = $clientesArray['name_cliente'];

            echo "<option value='$id_cliente'>$name_cliente</option>";
        }
      ?>
    </select>
  </div>
  <div class="col-md-3">
    <label>Inmuebles</label>
    <select id="consulta-lista-personal" class="form-control select-sm_user" style='margin:0px;' >
      
    </select>
  </div>
</div>

<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;margin-top:15px;'>
  <thead>
     <tr style='color:white;'>   
       <th>----</th>
       <th>Nombre</th>
       <th>edad</th>
       <th>domicilio</th>
       <th>horario</th>
       <th>Inmueble</th>
       <th>#</th>
     </tr>
  </thead>
  <form id="form_bajaElementos" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $name_inmueble ?>" name='inmueble_user'>
    <tbody id="listado_personalBaja">
        <?php
        $consultaGuardias         = "SELECT id_usuario,nombre_g,apellido_p,apellido_m,calle,colonia,num_exterior,demarcacion,turno,inmueble_asign,estado_repo,edad FROM  usuarios_datos_basicos WHERE inmueble_asign='$name_inmueble' and puesto='guardia' ORDER BY id_usuario ASC";
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
                                            <td>
                                                <?php echo "<input type='checkbox' name='user-$id_usuario' value='$id_usuario'>" ?>
                                            </td>
                                            <td><?php echo "$nombre_g $apellido_p $apellido_m" ?></td>
                                            <td><?php echo "20"; ?></td>
                                            <td><?php echo "$calle $colonia $num_ext $demarcacion"; ?></td>
                                            <td><?php echo "$horario"; ?></td>
                                            <td><?php echo "$inmueble"; ?></td>
                                            <td>
                                              <strong>
                                                <?php  echo "<span class='glyphicon glyphicon-asterisk' style='color:$color;'><span id='$id_usuario'style='font-size:.1em;color:rgba(0,0,0,0);'>$id_usuario</span></span>"; ?>
                                              </strong>
                                            </td>
                                          </tr>
                                              <?php 
                                                echo "
                                                    <script>
                                                        function myFunction$id_usuario() 
                                                        {
                                                            window.location='$ruta/panel/admin/personal-User-'+document.getElementById('$id_usuario').innerHTML;
                                                        }
                                                    </script>
                                                    "; ?>
                                      <?php

                              }
      ?>



   </tbody>
</form>      
   
</table>



