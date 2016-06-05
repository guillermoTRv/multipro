<?php 
	function sanitizar($var_sn){
		$var_sn = addslashes(htmlspecialchars(strip_tags(trim($var_sn))));
		return $var_sn;
	}
?>