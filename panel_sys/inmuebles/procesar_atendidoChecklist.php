<?php 
	include("../../cfg.php");
	include("../../sanitizar.php");
	$id_estadoCheck = sanitizar($_POST['input_rep']);

	$limpiar_repo   = "UPDATE estados_checklist_inmuebles SET status='sin novedad' WHERE id_eci = '$id_estadoCheck'";
	$limpiar_repo   = mysqli_query($enlace,$limpiar_repo) or die("no");
	?>
	<button style='margin-right:-30px;' type='button' class='btn btn-primary btn-xs'>Checklist atendido</button>
	<?php
?>