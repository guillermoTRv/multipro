<?php 
	function option_clientes($enlace){
		$selectEmpresasForm = "SELECT id_cliente,name_cliente FROM clientes";
		$selectEmpresasForm = mysqli_query($enlace,$selectEmpresasForm);
			
		echo "<option value=''>--</option>";				            
		while ($arrayEmpresasForm = mysqli_fetch_array($selectEmpresasForm)) {
			$id_clienteForm  = $arrayEmpresasForm['id_cliente'];
			$nameClienteForm = $arrayEmpresasForm['name_cliente'];
			?>  
			   <option value='<?php echo $id_clienteForm; ?>' ><?php echo $nameClienteForm; ?></option>
			<?php

		}     

	}
?>

<div class="modal fade" id="modalCheck" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:70px;'>
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;'>
      
      <div class="modal-body">  
			
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Agregar un checklist</a></li>
		    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Agregar una categoria</a></li>
		  </ul>

		  <div class="tab-content">
		    <div style='padding: 20px' role="tabpanel" class="tab-pane active" id="home">
		    	<form action="../../panel_sys/checklist/registrar_checklist.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Selecciona una empresa para la cual agregaras un check</label>
						<select id="cliente_check" class='form-control input-sm' name='cliente_slc' required>
							<?php
								option_clientes($enlace); 
							?>
						</select>
					</div>

					<div class="form-group">
						<label>Selecciona una categoria</label>
						<select id="categoria_check" class="form-control input-sm" name='categoria_slc' required>
							<option value=""></option>
						</select>
					</div>					

		          	<div class="form-group">
					    <label >Situacion del check list</label>
					    <input type="text" class="form-control input-sm" name='situacion_txt' placeholder="Situacion" required>
					</div>
			

					<?php echo $toquen; ?>
				        <button  type="submit" class="btn btn-default btn-primary">Aceptar</button>
				        <button  type="button" class="btn btn-default btn-primary" data-dismiss="modal">Cerrar ventana</button>
		          </form>
		    </div>
		    <div style='padding: 20px' role="tabpanel" class="tab-pane" id="settings">
		    	<form action="../../panel_sys/checklist/registrar_categoria.php" method="POST" enctype="multipart/form-data">
		    		<div class="form-group">
						<label>Selecciona una empresa para la cual se agregara una categoria</label>
						<select class='form-control input-sm' name='cliente_slc' required>
							<?php
								option_clientes($enlace); 
							?>
						</select>
					</div>

		          	<div class="form-group">
					    <label >Nombre de la categoria</label>
					    <input type="text" class="form-control input-sm" name='categoria_txt' placeholder="categoria" required>
					</div>
			

					<?php echo $toquen; ?>
				        <button  type="submit" class="btn btn-default btn-primary">Aceptar</button>
				        <button  type="button" class="btn btn-default btn-primary" data-dismiss="modal">Cerrar ventana</button>
		    	</form>
		    </div>
		  </div>
	  </div>
    
      
    </div>
  </div>
</div>


<!--
<div class="modal fade" id="modalCheck" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:70px;'>
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;'>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style='color:white;'>Agregar un checklist</h4>
      </div>
      <div class="modal-body">
          
      </div>
      
    </div>
  </div>
</div>
-->