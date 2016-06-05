<?php 
	$toquen = addslashes(htmlspecialchars(strip_tags(trim($_POST['tq']))));
	
	if (empty($toquen)) {
		if (! empty ( $_SERVER [ 'HTTP_X_REQUESTED_WITH' ])  
	     && strtolower ( $_SERVER [ 'HTTP_X_REQUESTED_WITH' ])  ==  'xmlhttprequest' )  { 
	    echo "hola ajax fallo por algo - comunica a sistemas";	$controller = 1; 
		}
		else{
			header("Location: $ruta");	
		}
	}	
?>