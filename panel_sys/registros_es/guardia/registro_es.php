		<div style='border:2px solid #e06000;margin-bottom:20px;'>	
				   <div class="row" style='background-color:rgba(0, 0, 0, .4);margin-left:1px;margin-right:1px;margin-top:1px;padding-left:12px;border-bottom:1px solid #e06000;'>
                     <center>
                     	<h3 style='margin-bottom:20px;margin-top:20px;margin-left:-14px;color:#f2f2f2;'>Asistencias</h3>
                     </center>
            </div>
            

             <?php 
               $consultaRegistroEstado = "SELECT estado_registro,hora_entrada FROM registros_es WHERE id_personal='$id_personal' order by id_registro_es desc";
               $consultaRegistroEstado = mysqli_query($enlace,$consultaRegistroEstado) or die("nop");
               $consultaRegistroEstado = mysqli_fetch_array($consultaRegistroEstado);
               $estado_registro   = $consultaRegistroEstado['estado_registro'];
               $fecha_registro    = $consultaRegistroEstado['hora_entrada'];

               if ($estado_registro == '' || $estado_registro == 'correcto') {
                 include("panel_sys/registros_es/guardia/vistasRegistroGuardia/vista_registrarEntrada.php");
               }
               if ($estado_registro == 'entrada' or $estado_registro == 'salida') {
                 include("panel_sys/registros_es/guardia/vistasRegistroGuardia/vista_estadoentrada.php");   
               }
               if ($estado_registro == 'pendiente') {
                 include("panel_sys/registros_es/guardia/vistasRegistroGuardia/vista_registrarSalida.php"); 
               }
             ?>
                  
                    

