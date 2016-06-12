<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:10%;'>
  <div class="modal-dialog" role="document">
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;color:white;'>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Levantar reporte</h4>
      </div>
      <div class="modal-body">
        <form id="form_reporte_guardia" method="POST" enctype="multipart/form-data">
          <textarea class="form-control" rows="3" name="texto_reporte"></textarea>
          <?php echo $toquen; ?>
        </form>
      </div>
      <div class="modal-footer">
        <div id="mensaje_reporteGuardia">
          <button type="button" class="btn btn-default" id="guardar_reporteGuardia">Guardar reporte</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>  
        </div>
        
      </div>
    </div>
  </div>
</div>