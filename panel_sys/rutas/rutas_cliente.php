  <a 
     href="<?php echo "$ruta/panel/$user_get/personal-guardias" ?>">
    <span 
    <?php echo $popover; ?>
    data-content='Información del personal'
    class='glyphicon glyphicon-user icon_izq active' <?php echo "style='color:$color_guardia;'" ?>></span>
  </a>
  
  <a  
     href="<?php echo "$ruta/panel/$user_get/inmuebles_listado" ?>">
    <span 
    <?php echo $popover; ?>
    data-content="Información del los inmuebles con los que se trabaja";
    class='glyphicon glyphicon-home icon_izq' <?php echo "style='color:$color_inm;'" ?>></span>
  </a>
  <a  
     href="<?php echo "$ruta/panel/$user_get/servicios" ?>">
     <span 
     <?php echo $popover; ?>
     data-content="Información de los servicios";
     class='glyphicon glyphicon-globe icon_izq'  <?php echo "style='color:$color_serv;'" ?>></span>
  </a>
  <a 
     href="<?php echo "$ruta/panel/$user_get/reportes-normales" ?>">
     <span 
     <?php echo $popover; ?>
     data-content="Reportes"; 
     class='glyphicon glyphicon-object-align-bottom icon_izq' <?php echo "style='color:$color_repo;'" ?>></span>
  </a>