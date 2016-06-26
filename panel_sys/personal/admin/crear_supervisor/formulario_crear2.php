<script>
	$(function(){
        $(document).on("click","#btn_asignar_inmueble",function(){
                    var url="../../panel_sys/personal/admin/crear_supervisor/asignacion_temporalArchivo.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_asignar_inmueble").serialize(),
                        success:function(data){
                            $("#mensaje_asignacion").html(data);
                        }
                    });
                    return false;
        });
    });
</script>

<?php 
	function horario(){
		for ($i=0; $i<10 ; $i++) { 
			$horario = "0".$i;
			echo "<option value='$horario'>$horario</option>";
		}
		for ($i=10; $i < 25 ; $i++) { 
			$horario = $i;
			echo "<option value='$horario'>$horario</option>";	
		}
	}
	$aleadorio  = rand(1,1000);
	$credencial = $fecha.$aleadorio;
	$input_credencial = "<input type='hidden' name='credencial' value='$credencial'>";
?>

	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Turno</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='turno'>
				<option value=''>--</option>
				<option style='12-12'>12-12</option>
				<option style='12-24'>12-24</option>
			</select>
		</div>

		<div class="col-md-4 espacio_input">
			<p style='text-align:center;' class='text_label'>Horario de labores</p>
				<div class="col-md-6">
					<select class='form-control select-sm_user' style='margin-top:-0px;' name='hora_1'>
						<option value=''>--</option>
						<?php $horas = horario(); ?>
					</select>
				</div>
				<div class="col-md-6">
					<select class='form-control select-sm_user' style='margin-top:-0px;' name='hora_2'>
						<option value=''>--</option>
						<?php $horas = horario(); ?>
					</select>
				</div>	
		</div>


		<div class="col-md-4 espacio_input">
			<p class='text_label'>Tipo de pago</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='type_pago'>
				<option value=''>--</option>
				<option value='mensual'>Mensual</option>
				<option value='quincenal'>Quincenal</option>
			</select>
		</div>
	</div>

	<div class="row" style='padding:10px;'>
		

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Fecha de inicio de contrato</p>
			<input type='date' class='form-control input-sm_user' name='inicio_contrato'>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Fecha finalización contrato</p>
			<input type='datetime' class='form-control input-sm_user' name='finalizacion_contrato'>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Costo del servicio</p>
			<input type='text' class='form-control input-sm_user' placeholder='costo' name='costo'>
		</div>

		<!--<div class="col-md-4 espacio_input">
			<p class='text_label'>Fecha de finalizacion</p>
			<input disabled type='date' class='form-control input-sm_user' placeholder='costo'>
		</div>-->
	</div>
	<?php   
		echo $input_credencial;
	?>	
</form>

<form id="form_asignar_inmueble" method="POST" enctype="multipart/form-data">
	<?php   
		echo $input_credencial;
	?>
	<div class="row">
		<center>
		<div style='background-color:#151515;margin-top:20px;border-radius:4px;width:93%;'>
			<p style='text-align:center;color:white;'>Asignar Inmuebles</p>
		</div>
		</center>
	</div>


	<div class="row" style='padding:10px;'>

		<div class="col-md-12 espacio_input" style="margin-bottom:20px">
			<label>Selecciona una empresa</label>
		  	<select name="empresa_slc" class='form-control select-sm_user' id="empresa_slc_cambioPuesto" style="margin-top:0px">
		  			<option value="">--</option>
		  			<?php 
						include("panel_sys/empresas_option.php");
					?>
		  	</select>
		</div>


		<div class="col-md-12 espacio_input" style="margin-bottom:20px">
			<label>Selecciona un inmueble para la asignación</label>
		  	<select name="inmueble_slc" class='form-control select-sm_user' id="inm_slc_cambioPuesto" style="margin-top:0px">
		  			<option value="">--</option>
		  	</select>
		</div>
		
		<div id="mensaje_asignacion">
			<div class="col-md-12 espacio_input">
				<button id="btn_asignar_inmueble" class="btn btn-success btn-sm">Asiganar inmueble</button>
			</div>	
		</div>
		

	</div>
</form>
	


	
		
	

