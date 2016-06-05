<?php 
      $opcion_none = "data-content='Esta opción esta inhabilidada en esta sección'";

      if ($type_user == "administrador") {
            include("panel_sys/opcionesUsuarios/opciones_administrador.php");
      }
      if ($type_user == "supervisor") {
            ?>
            <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cloud-download log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-search log_sm'></span>                 
            <?php
      }
      if ($type_user == "guardia") {
            ?>
            <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cloud-download log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-search log_sm'></span>                 
            <?php
      }

      if ($type_user == "cliente") {
            ?>
            <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cloud-download log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-search log_sm'></span>                 
            <?php
      }
?>
<script type="text/javascript">
      
        $('[rel="popover"]').popover({
            trigger:'hover',
            html:true,
            delay:40,
      });
</script>