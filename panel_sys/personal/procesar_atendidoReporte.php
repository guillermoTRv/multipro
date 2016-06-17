<?php 
	include("../../cfg.php");
	include("../../sanitizar.php");
	$id_reporte = sanitizar($_POST['input_rep']);

	$limpiar_repo = "UPDATE reportes_inmuebles_extraordinarios SET status='atendido' WHERE id_repo_ext = '$id_reporte'";
	$limpiar_repo = mysqli_query($enlace,$limpiar_repo) or die("no");
	?>
	<button style='margin-right:-30px;' type='button' class='btn btn-primary btn-xs'>Reporte atendido</button>
	<?php
?>