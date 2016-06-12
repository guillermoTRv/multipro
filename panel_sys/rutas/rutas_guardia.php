  
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
<?php 
  include("panel_sys/reportes/guardia/modal_reporteGuardia.php");
?>