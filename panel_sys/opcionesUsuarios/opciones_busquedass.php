<a href="#buscador_exp" data-toggle='modal'>
	<span class='glyphicon glyphicon-search log_sm'></span>	
</a>

<div  id="buscador_exp" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:10%;'>
	<div class="modal-dialog" role="document">
	    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;'>
	        <div class="modal-body" align="center"> 
			      	<form action="../../panel_sys/buscador/procesar_busquedaDos.php" method="post" id="FormularioExportacion">
						
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
		                
		                <h4 class="texto_principal" id="myModalLabel" align="center" style="margin-bottom:21px">Busqueda Avanzada:</h4>
		                
						<div class="row">
							<div class="col-md-4 col-md-offset-2">
						    	<label>Realizar para:</label>
						    	<select id="buscar_para" class="form-control select-sm_user" style='margin:0px;' >
							    	<option value="--">--</option>
							    	<option value="personal">Personal</option>
			                    	<!--<option value="excel">Supervisores</option>-->	
			                    	<option value="inmuebles">Inmuebles</option>
						   		</select>
							</div>

							<div class="col-md-4">
							    <label>Etiqueta</label>
							    <select id="etiqueta_b" class="form-control select-sm_user" style='margin:0px;' >
							      <option value="">--</option>
							    </select>
							</div>			
						</div>
						<div class="row" style="margin-top:25px;"> 
							<div class="col-md-8 col-md-offset-2">
								<input type="text" class="form-control input-sm_user" placeholder="Ingrese texto">
							</div>
						</div>
		            
		            	<hr>
		            	<button class='btn btn-default' data-dismiss="modal">Cerrar ventana</button>
		                <button type="submit" class="btn btn-primary">Realizar busqueda</button>
		            
		            </form>
			
			</div>
	    </div>
	</div>
</div>
      
