<?php 
		$datosGenerales_sub    = substr($nav,7,14);
		if ($datosGenerales_sub == "datosGenerales") {
			include("panel_sys/personal/admin/editar_datosGenerales/editar_datosGenerales.php");
		}


		$datosUser_sub         = substr($nav,7,9);
		if ($datosUser_sub == "datosUser") {
			include("panel_sys/personal/admin/editar_passNombre/editar_passNombre.php");
		}


		$foto_sub              = substr($nav,7,4);
		if ($foto_sub == "foto") {
			include("panel_sys/personal/admin/editar_foto/editar_foto.php");
		}


		$cambioInmueble_sub    = substr($nav,7,12);
		if ($cambioInmueble_sub == "InmuebleUser") {
			include("panel_sys/personal/admin/editar_cambioInmueble/editar_cambioInmueble.php");
		}


		$cambioCondiciones_sub = substr($nav,7,11);
		if ($cambioCondiciones_sub == "condiciones") {
			include("panel_sys/personal/admin/editar_condiciones/editar_condiciones.php");
		}

		$cambioPuesto_sub      = substr($nav,7,6);
		if ($cambioPuesto_sub == "Puesto") {
			$varUser = substr($nav,14);
			include("panel_sys/personal/admin/editar_puesto/editar_puesto.php");
		}

?>