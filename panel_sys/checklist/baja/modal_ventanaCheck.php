<div class="modal fade" id="baja_checkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:10%;'>
  <div class="modal-dialog" role="document">
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;color:white;padding:20px;'>
      <div class="modal-body">

          <?php 
            if ($nav=="baja_check") {
              echo "<p class='texto_principa' style='text-align:center;'>Necesitas seleccionar una empresa y un inmueble</p>";
            }
            else{
              echo "<p class='texto_principa' style='text-align:center;'>
            Estas a punto de dar de baja los checklist que hayas seleccionado <br> ¿Deseas continuar? <br>
          </p>";
            }
          ?>

          <center>
            <div id="mensaje_bajaCheck"></div>
            <button type="button" class="btn btn-default" id="btn_bajaCheck">Aceptar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>  
          </center>
            
      </div>
    </div>
  </div>
</div>