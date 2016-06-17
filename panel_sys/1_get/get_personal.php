<?php 

	$personal_substr    = substr($nav,0,8);
	if ($personal_substr == "personal") {
	    $personal_nav    =  "personal";
	    $ruta_select     =  "personal";
	}
 
    
	$personal_user_substr     =  substr($nav,9,4); #Identifica si la id esta en personal-User
	if ($personal_user_substr == "User") {
	    $personal_user      =  "User";
	    $ruta_select        =  "personal";
	    $personal_user_id   =  substr($nav,14,5); #extrae la id del usuario en personal-User-Id
	}


	$cambioVar_sub     = substr($nav,0,6);
	if ($cambioVar_sub == "cambio") {
		$ruta_select   = "personal";
	}


	$supervisor_user_substr  = substr($nav,0,10); #se busca si la id es de un supervisor
	if ($supervisor_user_substr == "supervisor") {
	    $supervisor_user     = "supervisor";
	    $supervisor_user_id  = substr($nav,16,4);
	}

	$cliente_user_substr  = substr($nav,0,7); #se busca si la id es de un supervisor
	if ($cliente_user_substr == "cliente") {
	    $cliente_user     = "supervisor";
	    $cliente_user_id  = substr($nav,13);
	}

	$personal_bajas_substr  = substr($nav,0,14); #se busca si la id es de un supervisor
	if ($personal_bajas_substr == "personal_bajas") {
	    $personal_bajas     = "personal_bajas";
	    $personal_bajas_id  = substr($nav,15);
	    $ruta_select = "personal_bajas";
	}


	###############################################################
	#get para cliente###########
	###############################################################

	$personalSupervisoSubsterCliente = substr($nav,0,21);
	if ($personalSupervisoSubsterCliente == 'personal-supervisores') {
		$personalSupervisorNavCliente = 'personal-supervisores';
	}

	###############################################################
	#get para supervisor###########
	###############################################################

	$user_substrSup = substr($nav,0,4);
	if ($user_substrSup == 'User') {		
		$user_datos = 'User';
	}

	$nav_jefeTurno_substr = substr($nav,0,7);
	if ($nav_jefeTurno_substr == "Asignar") {
		$nav_jefeTurno     = "Asignar";
		$nav_jefeTurno_id  = substr($nav,8);
	}


?>