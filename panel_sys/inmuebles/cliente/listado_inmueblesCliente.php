        <?php 
        	if ($nav=="inmuebles_listado") {
        		echo "<p class='texto_principal'>Seleccione una empresa para desplegar el listado de inmuebles</p>";
        	}
        ?>

			      <?php  
			      		$ClienteNumSubstr  = substr($nav, 10);
			      		$ClienteName       = "SELECT name_cliente FROM clientes WHERE id_cliente='$ClienteNumSubstr'";
			      		$ClienteName       = mysqli_query($enlace,$ClienteName);
			      		$ClienteName       = mysqli_fetch_array($ClienteName);
			      		$ClienteName       = $ClienteName['name_cliente'];

			      		if ($nav!="inmuebles_listado") {
			        		echo "<p class='texto_principal'>Empresa - $ClienteName</p>";
			        	}

			      ?>	 
                  <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>   
                          <th style='color:white;'>Nombre</th>
                          <th style='color:white;'>Direccion</th>
                          <th style='color:white;'>Supervisor</th>
                        </tr>
                    </thead>
                    <tbody>
        				<?php 
							





							$consultaInmuebles = "SELECT * FROM inmuebles WHERE empresa='$ClienteNumSubstr'";
							$consultaInmuebles = mysqli_query($enlace,$consultaInmuebles);
							while ($arrayInmueblesTable = mysqli_fetch_array($consultaInmuebles)) {
							
							$name_inmueble    = $arrayInmueblesTable['name_inmueble'];
							$calle            = $arrayInmueblesTable['calle'];
							$colonia          = $arrayInmueblesTable['colonia'];
							$num_exterior     = $arrayInmueblesTable['num_exterior'];
							$demarcacion      = $arrayInmueblesTable['demarcacion'];
							$supervisor       = $arrayInmueblesTable['supervisor'];


							?>
							<tr>
								<td><?php echo $name_inmueble ?></td>
								<td><?php echo $calle ?></td>
								<td><?php echo $supervisor ?></td>
							</tr>
							<?php



							} 
						?>                
		                        
                    </tbody>
                  </table>

