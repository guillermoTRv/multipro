<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<?php 
				include("panel_sys/personal/datos_guardiaInfo.php");
			?>
			
			<?php 
				if ($type_user=='supervisor') {
					?>
					<hr>
					<a href="<?php echo $ruta."/panel/supervisor/Asignar-$personal_user_id" ?>" class='a_limpia'><span class='glyphicon glyphicon-asterisk'></span>Asignar este usuario como jefe de turno</a>
					<?php
				}
			?>

			<?php 
				include("panel_sys/personal/info_reportes.php");
				#include("panel_sys/personal/admin/info_personal/info_reportes.php");
			?>
	</div>
</div>