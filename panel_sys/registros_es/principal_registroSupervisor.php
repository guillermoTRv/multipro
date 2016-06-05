<div style='border:2px solid #e06000;margin-bottom:20px;'>	
            <div style='width:100%; background-color:black;border-radius:3px;padding:1px;border-bottom:1px solid white;'>
                <div class="row">
                  <div class="col-md-3 col-md-offset-2">
                      <h4 class='texto_principal'>
                        Registro Entrada-Salida
                      </h4>
                  </div>
                  <div class="col-md-4">
                    <select id="select_registro_supervisor" class='form-control select-sm_user' style='margin-top:10px;'>
                      <?php include("panel_sys/registros_es/inmuebles_supervisor.php"); ?>
                    </select>
                  </div>
      
                </div>
            </div>
            

            <?php 
               $consultaRegistroEstado = "SELECT estado_registro,hora_entrada FROM registros_es WHERE id_personal='$id_personal' order by id_registro_es desc";
               $consultaRegistroEstado = mysqli_query($enlace,$consultaRegistroEstado) or die("nop");
               $consultaRegistroEstado = mysqli_fetch_array($consultaRegistroEstado);
               $estado_registro   = $consultaRegistroEstado['estado_registro'];
               $fecha_registro    = $consultaRegistroEstado['hora_entrada'];

               if ($estado_registro == '' || $estado_registro == 'correcto') {
                 include("panel_sys/registros_es/vistasRegistroSup/vista_registrarEntrada.php");
               }
               if ($estado_registro == 'entrada' or $estado_registro == 'salida') {
                 include("panel_sys/registros_es/vistasRegistroSup/vista_estadoentrada.php");   
               }
               if ($estado_registro == 'pendiente') {
                 include("panel_sys/registros_es/vistasRegistroSup/vista_registrarSalida.php"); 
               }


             ?>

              
                                
</div>