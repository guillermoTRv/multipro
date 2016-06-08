<?php 
	$user_get  = sanitizar($_GET['us']);
    $nav       = sanitizar($_GET['nav']);

    include("get_personal.php");
    include("get_inmuebles.php");
    include("get_checklist.php");
    include("get_servicios.php");
    include("get_reportes.php");
    #include("get_registro_es.php");

    include("get_idEmpresa.php");#este script solo es para el usuario tipo admin
?>
