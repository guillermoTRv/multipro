<?php  
	$varBusqueda  = sanitizar($_GET['q']);
	$varBy        = sanitizar($_GET['by']);
	$varType      = sanitizar($_GET['ty']);
?>
<div class="row">
	<div class="col-md-12" style="color:white">
		<h4>Resultado de busquedas para "<?php echo $varBusqueda ?>" &nbsp;&nbsp;&nbsp;|| &nbsp; Etiqueta - "<?php echo $varType ?>"</h4>
		<hr>		
	</div>
</div>

<?php 

if ($varBy == 'personal') {
	include("panel_sys/buscador/tablasFiltradas/tabla_usuarios.php");
}
if ($varBy == 'inmuebles') {
	include("panel_sys/buscador/tablasFiltradas/tabla_inmuebles.php");
}

#como van las busquedas, la mayoria por like por like 
/*
Personal - Nombre -> Tabla A, nombre usuario etc etc,
Personal - Apellido paterno -> Tabla A, nombre usuario etc etc,
Personal - Apellido materno -> Tabla A, nombre usuario etc etc,
Personal - Edad(solo mostrar 30 registros) nombre usuario etc etc,
Personal - Curp(where directo) Unico registro

inmueble - name name inmueble
inmueble - supervisor puta madre{Algoritmo - su busca por like el nombre, o se busca por match el nombre, se trean id con un while y se busca la relacion de la id con el inmueble}

*/


?>

    