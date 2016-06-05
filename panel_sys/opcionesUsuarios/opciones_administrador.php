<?php 
	include("opciones_mas_administrador.php");
	include("opciones_eliminar_administrador.php");
?>
	<span <?php echo $popover?> data-content='Para editar un registro solo debes de posicionarte en este y darle doble click' class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
<?php 
	include("opciones_guardar_administrador.php");
 ?>
    <span <?php echo $popover.$opcion_none?>class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
    <span <?php echo $popover.$opcion_none?>class='glyphicon glyphicon-search log_sm'></span>      