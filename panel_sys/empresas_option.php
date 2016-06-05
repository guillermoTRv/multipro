<?php 
	$clientesConsulta = "SELECT id_cliente,name_cliente FROM clientes";
	$clientesEjecutar = mysqli_query($enlace,$clientesConsulta) or die("cuento");
	while($arrayClientes = mysqli_fetch_array($clientesEjecutar)){
		  $id_cliente  = $arrayClientes[0];
		  $nameCliente = $arrayClientes[1];
		  echo "<option value='$id_cliente'>$nameCliente</option>";
	}
?>