<form id="alta_cliente" method="post" enctype="multipart/form-data">
	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Nombres</p>
			<input type='text' class='form-control input-sm_user' name='nombre'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Apellido paterno</p>
			<input type='text' class='form-control input-sm_user' name='paterno'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Apellido materno</p>
			<input type='text' class='form-control input-sm_user' name='materno'>
		</div>
	</div>

	<div class="row" style='margin-bottom:20px; padding:10px;'>
		<div class="col-md-6 espacio_input">
			<p class='text_label'>Curp</p>
			<input type='text' class='form-control input-sm_user' name='curp'>
		</div>
		<div class="col-md-6 espacio_input">
			<p class='text_label'>Password</p>
			<input type='password' class='form-control input-sm_user' name='pass'>
		</div>	
	</div>


	<?php echo $toquen; ?>
</form>
<div id="m_cliente">
</div>