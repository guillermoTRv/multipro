<?php 
	$serviciosSupervisor = "SELECT * FROM inmubles "
?>

<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>   
                          <th style='color:white;'>Nombre inmueble</th>
                          <th style='color:white;'>Direccion</th>
                          <th style='color:white;'>#</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $serviciosSupervisor = "SELECT id_inmueble,name_inmueble,calle,colonia,num_exterior,num_interior,demarcacion,supervisor FROM inmuebles WHERE supervisor='$id_personal' ORDER BY id_inmueble DESC";
                        $serviciosSupervisor = mysqli_query($enlace,$serviciosSupervisor);
                        while ($array = mysqli_fetch_array($serviciosSupervisor)) {
                              $id_inmueble   = $array['id_inmueble']; 
                              $nombre        = $array['name_inmueble'];
                              $calle         = $array['calle'];
                              $colonia       = $array['colonia'];
                              $num_exterior  = $array['num_exterior'];
                              $num_interior  = $array['num_interior'];
                              $demarcacion   = $array['demarcacion'];
                              #revisar la codificacion de los campos en las bases de datos
                              include("panel_sys/inmuebles/estado_repoInmueble.php");
                      
                              
                                
                              ?>
                              <tr <?php echo "ondblclick='myFunction$id_inmueble()'"; ?>>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $calle."&nbsp;".$num_exterior."&nbsp;".$colonia."&nbsp;".$demarcacion ?></td>
                                <td>
                                  <strong>
                                          <?php echo "<span class='glyphicon glyphicon-asterisk' style='color:$color;'><span id='$id_inmueble'style='font-size:.1em;color:rgba(0,0,0,0);'>$id_inmueble</span></span>"; ?>
                                  </strong>
                                </td>
                              </tr>      
                              <?php
                              echo "
                                  <script>
                                      function myFunction$id_inmueble() 
                                        {
                                            window.location='$ruta/panel/$user_get/inmuebles-datos-'+document.getElementById('$id_inmueble').innerHTML;
                                        }
                                  </script>
                              ";              
                         } 
                      ?>
                    </tbody>
</table>