<?php 
	$empresaGet      = $_GET['emp'];
	$consultaEmpresa = "SELECT name_cliente FROM clientes WHERE id_cliente='$empresaGet'";
	$consultaEmpresa = mysqli_query($enlace,$consultaEmpresa);
	$consultaEmpresa = mysqli_fetch_array($consultaEmpresa);
	$name_clienteEmp = $consultaEmpresa['name_cliente'];
?>

<div class="row" style="margin:0px;padding:16px 16px 26px 26px;background-color:#484848;">	
	<?php include("panel_sys/reportes/repo_generales/form_generarReporteGenerales.php"); ?>
</div>

<div class="row" style="margin:0px;">
		<div id="Exportar_a_Excel">
		<div class="table-responsive">
		<table class="table table-bordered" border="1" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
		        <caption style="background-color:#484848;color:#ffffff;border-top:1px solid black" >
		        	&nbsp; Reporte Generales para <?php echo $name_clienteEmp ?> - Del: <?php echo $fechaUnoRepo ?> al: <?php echo $fechaDosRepo ?> para <?php echo $consultaInmueble ?> 
		        </caption>

		      	<?php include("tabla_admin.php"); ?>
		</table>
	    </div>
		</div>
</div>

