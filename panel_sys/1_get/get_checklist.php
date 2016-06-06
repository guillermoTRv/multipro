<?php 
	$check_substr       = substr($nav,0,5);
	if ($check_substr== "check") {
	    $check_nav   = "check";
	    $ruta_select = "check";
	}
	
	$baja_check_substr = substr($nav,0,10);
	if ($baja_check_substr == "baja_check") {
	 	$baja_check  = "baja_check";
	 	$ruta_select = "baja_check"; 
	 } 

?>