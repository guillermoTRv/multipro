<?php 

      $busquedaEstado  = "SELECT id_registro_es,estado_registro,hora_salida,inmueble FROM registros_es WHERE id_personal='$id_personal' order by id_registro_es desc";
      $busquedaEstado  = mysqli_query($enlace,$busquedaEstado) or die("ha");
      $busquedaEstado  = mysqli_fetch_array($busquedaEstado);
      $id_inmueble     = $busquedaEstado['inmueble'];
      $id_registro_es  = $busquedaEstado['id_registro_es'];



      $inmueblePendiente     = "SELECT name_inmueble FROM inmuebles WHERE id_inmueble = '$id_inmueble'";
      $inmueblePendiente     = mysqli_query($enlace,$inmueblePendiente) or die("ho");
      $inmueblePendiente     = mysqli_fetch_array($inmueblePendiente);
      $inmueblePendiente     = $inmueblePendiente['name_inmueble']; 


?>
<div class="row" style='margin-top:70px;'>
        <div class="col-md-5 col-md-offset-2" id="deshabilitar_form">
                  <a disabled style='width:170px;font-size:1.2em;' class='btn btn-sm btn-ind'> Registrar entrada </a> 
        </div>
        
        <div class="col-md-5 pull-right" id="deshabilitar_formSalida">
              <form id="form-salidaSupervisor" method="post" enctype="multipart/form-data">
                  <?php echo $toquen; ?>
                  <?php echo "<input type='hidden' name='id_es' value='$id_registro_es'>"; ?>
                  <a style='width:170px;font-size:1.2em;' id="btn-salidaSupervisor" class='btn btn-sm btn-ind'> Registrar salida </a>
              </form>
        </div>
</div>

<div class="row" style='margin-bottom:60px'>
        <div class="col-md-8 col-md-offset-2">
            <?php  
                echo "<h4 class='texto_principal'>El registro de salida es para el inmueble $inmueblePendiente</h4>";
            ?>        
        </div>
        <div id="mensaje-salidaSupervisor" class="col-md-8 col-md-offset-2"></div>
</div>
