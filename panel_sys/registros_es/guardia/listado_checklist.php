<div class="modal fade" id="list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:10%;'>
  <div class="modal-dialog" role="document">
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;color:white;'>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Levantar reporte</h4>
      </div>
      <div class="modal-body">
	  <form action="panel_sys/registro_es/guardia/procesar_checklistGuardia.php" method="POST" enctype="multipart/form-data">
	  <?php
	  	$consultaCategoria = "SELECT categoria FROM check_categoria WHERE id_empresa = '$empresaAsign'";
	  	$consultaCategoria = mysqli_query($enlace,$consultaCategoria);
	  	$n=0;
	  	while ($arrayCategoria = mysqli_fetch_array($consultaCategoria)) 
	  		{
	  		$categoria = $arrayCategoria['categoria'];
	  		$n++;
	  		?>
		  	  <p class="texto_principal"><?php echo $categoria ?></p>
				<div class="row" style="margin:5px;">
					<?php 
						$consultaCheck = "SELECT * FROM check_list WHERE id_empresa='$empresaAsign' and categoria='$categoria'";
					    $consultaCheck = mysqli_query($enlace,$consultaCheck) ;
					    $i=0;
					    while ($arrayCheck = mysqli_fetch_array($consultaCheck)) {
					    	$check_list = $arrayCheck['situacion_name'];
					    	$i++;
					    	?>		        
					    		<label>
							      <input type="checkbox" name="<?php echo "situacion".$n.$i ?>"  ><?php echo $check_list.$n.$i ?> | <small>status</small> ->  
							    </label>  

							    <label>
							      <input type="checkbox" name="<?php echo "sin".$n.$i ?>"> Sin novedad ||
							    </label>  

								<label style="margin-bottom:-10px;">
								  <input type="email" name="<?php echo "repo".$n.$i ?>" style='width: 250px' class="form-control input-sm" id="exampleInputEmail3" placeholder="Escribir solo en caso e reporte">
								</label>
					      <?php
					    }	

					?>
				
				</div>
				<hr>	
	  		<?php
	  		}
	  ?>
		





      	
      	<?php /*
			$consultaCheck = "SELECT * FROM check_list WHERE id_empresa='$empresaAsign'";
		    $consultaCheck = mysqli_query($enlace,$consultaCheck) ;
		    while ($arrayCheck = mysqli_fetch_array($consultaCheck)) {?>		        
		              <label>
		                <input type="checkbox"> 
		                  <p><?php echo $name_check = $arrayCheck['situacion_name']; ?></p>
		              </label>
		      <?php
		    }*/
		?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Guardar reporte</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
      </div>
      </form>
    </div>
  </div>
</div>
