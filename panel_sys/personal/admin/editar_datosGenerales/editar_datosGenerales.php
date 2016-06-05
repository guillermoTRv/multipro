<?php 
	echo $datosGenerales_subId    = substr($nav,22);
?>

<div style='border:2px solid #e06000;margin-bottom:20px;'>

  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a  class='tab_a'href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Creenciales</a></li>

    <li role="presentation"><a class='tab_a' href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Dirección</a></li>
  	
  	<li role="presentation"><a class='tab_a' href="#fisicos" aria-controls="fisicos" role="tab" data-toggle="tab">Datos fisicos</a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane in active" id="profile">
    	<?php include("panel_sys/personal/admin/editar_datosGenerales/form_credenciales.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
    	<?php include("panel_sys/personal/admin/editar_datosGenerales/form_direccion.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="fisicos">
    	<?php include("panel_sys/personal/admin/editar_datosGenerales/form_fisico.php"); ?>
    </div>
  </div>
	<!--<a style='margin:3px;' href="<?php echo $ruta."/personal-User-".$datosGenerales_subId ?>">Regresar a las opciones de cambios</a>-->
</div>

<!--<div class="row">
	<div class="col-md-8" style='margin-left:15px;'>
		<form class="form-horizontal">
		  <legend class='texto_principal'>Edicion de datos principales para el usuario</legend>
		  
		  <div class="form-group">
		    <label class="col-sm-4 control-label">Nombre</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Apellido paterno</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Apellido materno</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>


		  <div class="form-group">
		    <label class="col-sm-4 control-label">Fecha e nacimiento</label>
		    <div class="col-sm-8">
		      <input type="password" class="form-control" placeholder="Password">
		    </div>
		  </div>

  		  <div class="form-group">
		    <label class="col-sm-4 control-label">Curp</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>


		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">Calle</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">Num int</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">Num ext</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">Colonia</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">Coigo posta</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">Entia feativa</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">emarcacion</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		    		  <div class="form-group">
		    <label class="col-sm-4 control-label">Movil</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

			


		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
	</div>
</div>-->