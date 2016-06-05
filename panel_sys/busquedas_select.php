<?php 
    function selected($nav_selected){
        global $nav; 
        if($nav==$nav_selected){ echo " selected"; } 
    }


	if ($type_user == "administrador") {
	    include("panel_sys/varias_funciones/selects/selects_administrador.php");
    }

    if ($type_user=="supervisor") {
        include("panel_sys/varias_funciones/selects/selects_supervisor.php");
    }

    if ($type_user == "cliente") {    
        include("panel_sys/varias_funciones/selects/selects_clientes.php");    
    }
    
	?>