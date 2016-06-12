<form id="form_reporte_General" method="POST" enctype="multipart/form-data">
        <textarea class="form-control" rows="3" name="texto_reporte"></textarea>
        <?php echo $toquen; ?>
        <?php include("panel_sys/reportes/extraordinario/selects_inmuebles.php"); ?>				
	 	<?php echo $toquen; ?>
</form>

<div id="mensaje_reporteGeneral">
	<button style='background-color:#e06000;color:white;margin-top:20px' type="button" class="btn btn-default btn-xs" id="guardar_reporteGeneral">
			Enviar reporte extraordinario
	</button>	
</div>