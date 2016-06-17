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



                  