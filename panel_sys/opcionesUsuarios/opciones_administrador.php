	<?php 
	include("opciones_mas_administrador.php");
	include("opciones_eliminar_administrador.php");
	?>
	<span <?php echo $popover?> data-content='Para editar un registro solo debes de posicionarte en este y darle doble click' class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
	<?php 
	include("opciones_guardar_administrador.php");
	?>
 	
 	<?php 
 	if ($nav=='Asistenciareportes' or $nav=='Historialreportes') {
 		?>
		<a href="#bajarDoc" data-toggle='modal' class="limpia">
			<span class="glyphicon glyphicon-download-alt log_sm"></span>&nbsp;&nbsp;&nbsp;
		</a>
 		<?php
 	}
 	?>


 	<span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;	
    
    <span <?php echo $popover.$opcion_none?>class='glyphicon glyphicon-search log_sm'></span>      

    

    <div  id="bajarDoc" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:10%;'>
	  <div class="modal-dialog" role="document">
	    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;'>
	      <div class="modal-body" align="center"> 
	      <form action="../../panel_sys/ficheroExcel.php" method="post" id="FormularioExportacion">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
                <h4 class="texto_principal" id="myModalLabel" align="center">Nombre del Fichero</h4>
                <input style="margin-bottom:7px;" type="text" name="nombre" autocomplete="off" placeholder="Nombre del Fichero" value="" required>
                <br>
                <strong style="color:white;">Formato: </strong><br>
                <select name="imp">
                    <option value="excel">Hoja de Excel</option>
                    <option value="pdf">Archivo PDF</option>
                </select>
            
            	<hr>
            	<button class='btn btn-default' data-dismiss="modal">Cerrar ventana</button>
                <button type="submit" class="btn btn-primary botonExcel">Descargar Reporte</button>
                <input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
            
            </form>
			</div>
	    </div>
	  </div>
	</div>