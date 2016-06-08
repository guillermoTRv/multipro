  
  <a href="<?php echo "$ruta/panel/$user_get/asistencia" ?>">
      <span 
	  <?php echo $popover; ?>
      data-content='Registro entrada-salida'
      class='glyphicon glyphicon-time icon_izq'></span>
  </a>

  <a href="#myModal" data-toggle="modal">
      <span 
	  <?php echo $popover; ?>
      data-content='Reportes'
      class='glyphicon glyphicon-list-alt icon_izq' style='margin-top:17px;'></span>
  </a>	


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:10%;'>
  <div class="modal-dialog" role="document">
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;color:white;'>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Levantar reporte</h4>
      </div>
      <div class="modal-body">
        <form action="">
          <textarea class="form-control" rows="3"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default">Guardar reporte</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>