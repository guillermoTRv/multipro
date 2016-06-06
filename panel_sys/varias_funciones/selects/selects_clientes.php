<?php 
	if (isset($personal_nav)) {
		?>
			<select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
                     <option value="guardias"     <?php selected("personal-guardias");     ?> >Guardias</option>
                     <option value="supervisores" 
                     		<?php 
                     			if($nav=="personal-supervisores-empresa" || $nav=="personal-supervisores-empresa-inmueble" || $nav=="personal-supervisores")
                     			{ echo " selected"; } 
                     		?>>
                     		Supervisores
                     </option>
            </select>
		<?php
	}
	if (isset($inmuebles_nav)) {
		?>
			<select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
				<option>--</option>
					<?php 
						$consClientes = "SELECT id_cliente,name_cliente FROM clientes ORDER BY id_cliente";
						$consClientes = mysqli_query($enlace,$consClientes);
						while ($arrayCons   =  mysqli_fetch_array($consClientes)) {
							$id_cliente     = $arrayCons['id_cliente'];
							$name_inmueble  = $arrayCons['name_cliente'];

							echo "<option value='$id_cliente' >$name_inmueble</option>";
						}

					?>                    
            </select>
		<?php
	}

	$personalDateSelect =  substr($nav,0,11);
	if ($personalDateSelect == 'guardiaDate') {
		?>
			<select class="form-control select-sm_user" style='margin:0px;'>
                     <option>--</option>
            </select>
		<?php
	}

	if (isset($servicios_nav)) {
		include("panel_sys/varias_funciones/selects/select_empresasCheck.php");
	}
?>



                  