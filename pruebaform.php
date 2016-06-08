<?php 
	for ($i=1; $i <=3 ; $i++) { 
		 $pv = "hola_".$i;
		 	
		 $var = $_POST[$pv];

		 if ($var!='') {
		 	echo "<br>".$var;
		 }
		 else{
		 	echo "string";
		 }

		 

	}

?>
<div class="modal fade" id="list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:10%;'>
  <div class="modal-dialog" role="document">
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;color:white;'>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Levantar reporte</h4>
      </div>
      <div class="modal-body">

      <form class="form-horizontal">
      	<p class="texto_principal">Perimetros</p>
		<div class="row" style="margin:5px;">
			<label>
		      <input type="checkbox"> Puerta 1 | Status
		    </label>  

		    <label>
		      <input type="checkbox"> Sin novedad ||
		    
		    </label>  

			<label style="margin-bottom:-10px;">
				<input style='width: 250px' type="email" class="form-control input-sm" id="exampleInputEmail3" placeholder="Escribir solo en caso e reporte">
			</label>
		</div>

		<div class="row" style="margin:5px;">
			<label>
		      <input type="checkbox"> Puerta 1 | Status
		    </label>  

		    <label>
		      <input type="checkbox"> Sin novedad ||
		    </label>  

			<label style="margin-bottom:-10px;">
				<input style='width: 250px' type="email" class="form-control input-sm" id="exampleInputEmail3" placeholder="Escribir solo en caso e reporte">
			</label>
		</div>      	

		<div class="row" style="margin:5px;">
			<label>
		      <input type="checkbox"> Puerta 1 | Status
		    </label>  

		    <label>
		      <input type="checkbox"> Sin novedad ||
		    </label>  

			<label style="margin-bottom:-10px;">
				<input style='width: 250px' type="email" class="form-control input-sm" id="exampleInputEmail3" placeholder="Escribir solo en caso e reporte">
			</label>
		</div>      	
		<hr>
		<p class="texto_principal">Exteriores</p>
		<div class="row" style="margin:5px;">
			<label>
		      <input type="checkbox"> Puerta 1 | Status
		    </label>  

		    <label>
		      <input type="checkbox"> Sin novedad ||
		    
		    </label>  

			<label style="margin-bottom:-10px;">
				<input style='width: 250px' type="email" class="form-control input-sm" id="exampleInputEmail3" placeholder="Escribir solo en caso e reporte">
			</label>
		</div>

		<div class="row" style="margin:5px;">
			<label>
		      <input type="checkbox"> Puerta 1 | Status
		    </label>  

		    <label>
		      <input type="checkbox"> Sin novedad ||
		    </label>  

			<label style="margin-bottom:-10px;">
				<input style='width: 250px' type="email" class="form-control input-sm" id="exampleInputEmail3" placeholder="Escribir solo en caso e reporte">
			</label>
		</div>      	

		<div class="row" style="margin:5px;">
			<label>
		      <input type="checkbox"> Puerta 1 | Status
		    </label>  

		    <label>
		      <input type="checkbox"> Sin novedad ||
		    </label>  

			<label style="margin-bottom:-10px;">
				<input style='width: 250px' type="email" class="form-control input-sm" id="exampleInputEmail3" placeholder="Escribir solo en caso e reporte">
			</label>
		</div>      	

	  </form>


      	<!--<form class="form-inline">
		  
		  <div class="form-group">
		    <label>
		      <input type="checkbox">Puerta 1 | Status
		    </label>
		  </div>
		  
  		  <div class="form-group">
  		  	<label>
			    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
			    Sin novedad
			</label>
  		  </div>

  		  <div class="form-group">
  		  	<label>
			    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
			    Reportar
			</label>
  		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control input-sm" id="exampleInputEmail3">
		  </div>		
	

		</form>
-->
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
        <button type="button" class="btn btn-default">Guardar reporte</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>
