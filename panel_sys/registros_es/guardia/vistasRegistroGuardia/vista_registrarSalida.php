<?php 

      $busquedaEstado  = "SELECT id_registro_es,estado_registro,hora_salida,inmueble FROM registros_es WHERE id_personal='$id_personal' order by id_registro_es desc";
      $busquedaEstado  = mysqli_query($enlace,$busquedaEstado) or die("ha");
      $busquedaEstado  = mysqli_fetch_array($busquedaEstado);
      $id_registro_es  = $busquedaEstado['id_registro_es'];

?>
<div class="row" style='margin-top:70px;'>
        <div class="col-md-5 col-md-offset-2" id="deshabilitar_form">
                  <a disabled style='width:170px;font-size:1.2em;' class='btn btn-sm btn-ind'> Registrar entrada </a> 
        </div>
        
        <div class="col-md-5 pull-right" id="deshabilitar_formSalida">
              <form id="form-salidaSupervisor" method="post" enctype="multipart/form-data">
                  <?php echo $toquen; ?>
                  <?php echo "<input type='hidden' name='id_es' value='$id_registro_es'>"; ?>
                  <div id="habilitar_btnSalir">
                    <a style='width:170px;font-size:1.2em;' class='btn btn-sm btn-ind' disabled> Registrar salida </a>
                  </div>
              </form>
        </div>
</div>

<div class="row" style='margin-bottom:60px'>
        <div id="mensaje-salidaSupervisor" class="col-md-8 col-md-offset-2"></div>
</div>


<div class="row" style='margin-top:40px;margin-bottom:60px;padding-left:20px;padding-right:20px;'>
                       <a href="#list" data-toggle='modal'>
                       <div class="col-md-10 col-md-offset-1" style='padding-top:4px;padding-bottom:-4px;background-color:rgba(0,0,0,.5);border:solid 1px white;border-radius:3px;'>
                          <center>
                            <p style='margin-bottom:4px;color:white'>Check list</p>
                          </center>
                       </div>
                       </a>
                    </div>
                      
</div>
<?php 
    include("panel_sys/registros_es/guardia/listado_checklist.php");
?>