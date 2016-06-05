<?php 
	 $inmuebles_substr   = substr($nav, 0,9);
	 if($inmuebles_substr == "inmuebles"){
	       $inmuebles_nav   =  "inmuebles";
	       global $ruta_select;
	       $ruta_select     =  "inmuebles";
	 }

	 $inmueblesDatos_substr = substr($nav,0,15);
	 if ($inmueblesDatos_substr == "inmuebles-datos") {
	 	   $inmuebles_datos   = "inmuebles-datos";
	 	   $inmuebleId_datos  = substr($nav, 16, 4);
	 }
?>