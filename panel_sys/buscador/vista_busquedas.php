<?php  
	$varBusqueda  = sanitizar($_GET['q']);
?>

<div class="row">
	<div class="col-md-12" style="color:white">
		<h4>Resultado de busquedas para "<?php echo $varBusqueda ?>"</h4>
		<hr>		
	</div>
</div>

<?php 
	
	$consultaUno  = "SELECT * FROM usuarios_datos_basicos WHERE MATCH(nombre_g,apellido_p,apellido_m) AGAINST('$varBusqueda' IN BOOLEAN MODE)";
	$consultaUno  = mysqli_query($enlace,$consultaUno) or die("no");
	$consultaUnoA = mysqli_fetch_array($consultaUno);
	$consultaUnoC = mysqli_num_rows($consultaUno);

	if ($consultaUnoC != 0) {
		$idUs     = $consultaUnoA['id_usuario'];
		include("panel_sys/buscador/tabla_usuarios.php");
	}

	else {
		$consultaDos  = "SELECT * FROM inmuebles WHERE MATCH(name_inmueble) AGAINST('$varBusqueda' IN BOOLEAN MODE)";
		$consultaDos  = mysqli_query($enlace,$consultaDos) or die("no");
		$consultaDosA = mysqli_fetch_array($consultaDos);
		$consultaDosC = mysqli_num_rows($consultaDos);	

		if ($consultaDosC != 0) {											
			$idInm    = $consultaDosA['id_inmueble'];
			include("panel_sys/buscador/tabla_inmuebles.php");				
		}
		else{
			echo "<p>No se encontraron resultados para la busqueda '$varBusqueda'</p>";
		}

	}
?>
