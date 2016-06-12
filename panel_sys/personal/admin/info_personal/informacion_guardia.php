<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<?php 
				include("panel_sys/personal/datos_guardiaInfo.php");
			?>
			<hr>
			<div class="row">
				<div style='color:white;' class="col-md-10">
					Edición de datos 
					<ul style='margin-top:10px;'>
						<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-datosGenerales-".$personal_user_id; ?>">Modificar datos generales</a></li>
						<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-datosUser-".$personal_user_id; ?>">Cambio de contraseña y nombre de usuario</a></li>
						<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-foto-".$personal_user_id; ?>">Cambio de foto</a></li>
						<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-InmuebleUser-".$personal_user_id; ?>">Cambio de Inmueble</a></li>
						<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-condiciones-".$personal_user_id; ?>">Cambio de horario, sueldo, contrato</a></li>
						<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-Puesto-".$personal_user_id; ?>">Cambio de puesto</a></li>
					</ul>
				</div>
			</div>
			
			<?php 
				include("panel_sys/personal/info_reportes.php");

				#include("panel_sys/personal/admin/info_personal/info_reportes.php");
			?>
	</div>

</div>