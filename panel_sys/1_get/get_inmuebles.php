<?php 
		 $inmuebles_substr   = substr($nav, 0,9);
		 if($inmuebles_substr == "inmuebles"){
		       $inmuebles_nav   =  "inmuebles";
		       
		       $inmuebles_bajasSubstr = substr($nav,0,15);
		       if ($inmuebles_bajasSubstr == "inmuebles_bajas") {
		       	   $inmuebles_bajasNav     =  "inmuebles_bajas";
		       	   $inmuebles_bajasNavId   =  substr($nav,16);
		       	   $ruta_select            =  "inmuebles_bajas";
		       }
		       else{
		       	   if($type_user=='administrador'){$ruta_select     =  "zona-inmuebles";}
		       	   if($type_user=='cliente'){$ruta_select   =  "inmuebles";}
		       }

		 }

		 $inmuebles_zonaSubstr = substr($nav,0,14); 
		 if ($inmuebles_zonaSubstr == "zona-inmuebles") {
		     $inmuebles_zonaid = substr($nav, 15);
		     $ruta_select     =  "zona-inmuebles";
		 }


		 $inmueblesDatos_substr = substr($nav,0,15);
		 if ($inmueblesDatos_substr == "inmuebles-datos") {
		 	   $inmuebles_datos   = "inmuebles-datos";
		 	   $inmuebleId_datos  = substr($nav, 16, 4);
		 }

		 $cambioInmueble_dG_substr = substr($nav,0,29);
		 if ($cambioInmueble_dG_substr == "cambioInmueble-datosGenerales") {
		 	   $cambioInmueble_datosGenerales   = "cambioInmueble";
		 	   $cambioInmueble_datosGeneralesId = substr($nav,29);
		 }

		 $cambioInmueble_sup_substr = substr($nav,0,25);
		 if ($cambioInmueble_sup_substr == "cambioInmueble-supervisor") {
		 	   $cambioInmueble_supervisor = "cambioInmueble";
		 	   $cambioInmueble_supervisorId = substr($nav,26);
		 }
		 $estado_checklistInmuebleSub = substr($nav,0,15);
		 if ($estado_checklistInmuebleSub == "estadoChecklist") {
		 	 $estado_checklistInmueble    = "cambioInmueble";
		 	 $estado_checklistInmuebleId  =  substr($nav,16);
		 }


		 ########cliente########
		 /*$datosInmuebles_substr = substr($nav,0,14);
		 if ($datosInmuebles_substr == "datosInmuebles") {
		 	 $datosInmuebles_nav = "datosInmuebles";
		 	 $datosInmuebles_id = substr($nav,15);
		 }*/

		 

?>