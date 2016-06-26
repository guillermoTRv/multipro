<?php 
	
	$controller = 0;
	include("../../../../pack_config.php");

	session_start();
	$type_user = $_SESSION['type_user'];


	if ($type_user == 'administrador') {
		
		if ($controller == 0) {
			

			$credencial        =   sanitizar($_POST['credencial']);

			$name_txt          =   sanitizar($_POST['name_txt']);
			$apell_uno         =   sanitizar($_POST['apell_uno']);
			$apell_dos		   =   sanitizar($_POST['apell_dos']);	
			$nacimiento_date   =   sanitizar($_POST['nacimiento_date']);
			$curp_txt          =   sanitizar($_POST['curp_txt']); 
			#$usuario_txt       =   sanitizar($_POST['usuario_txt']);       
			
			$pass_txt          =   sanitizar($_POST['pass_txt']);
			$calle_txt         =   sanitizar($_POST['calle_txt']);
			$num_ext           =   sanitizar($_POST['num_ext']);
			$num_int           =   sanitizar($_POST['num_int']);
			$colonia           =   sanitizar($_POST['colonia']);
			$postal            =   sanitizar($_POST['postal']);
			$entidad_slc       =   sanitizar($_POST['entidad_slc']);
			
			$demarcacion       =   sanitizar($_POST['demarcacion_slc']);
			$num_mobil         =   sanitizar($_POST['mobil']);
			$inmueble_slc      =   "--";
			#$supervisor        =   sanitizar($_POST['supervisor']);
			$costo             =   sanitizar($_POST['costo']);
			$turno             =   sanitizar($_POST['turno']);
			$hora_1            =   "00";
			$hora_2            =   "00";
			$type_pago         =   sanitizar($_POST['type_pago']);
			$inicio_contr      =   sanitizar($_POST['inicio_contrato']);		
			$final_contr       =   sanitizar($_POST['finalizacion_contrato']);	 
			$peso              =   sanitizar($_POST['peso']);
			$estatura          =   sanitizar($_POST['estatura']);

			if ($credencial      !='' and 
				$name_txt        !='' and 
				$apell_uno       !='' and 
				$apell_dos       !='' and 
				$nacimiento_date !='' and 
				$curp_txt        !='' and 
				#$usuario_txt     !='' and 
				$pass_txt        !='' and 
				$calle_txt       !='' and 
				$num_ext         !='' and 
				$num_int         !='' and 
				$colonia         !='' and 
				$postal          !='' and 
				$entidad_slc     !='' and 
				$demarcacion     !='' and 
				$num_mobil       !='' and 
				$inmueble_slc    !='' and 
				#$supervisor      !='' and 
				$costo           !='' and 
				$hora_1          !='' and 
				$hora_2          !='' and 
				$type_pago       !='' and 
				$inicio_contr    !='' and
				$final_contr     !='' and
				$peso            !='' and
				$estatura        !=''
				) {
				#no dejar pasar la validacion de tipos de variables
				#creo que sera necesario crear con un algoritmo el nombre del usuario
				
				

				if (preg_match("/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/", $curp_txt)) {
					$controllerUser = 1;
				}
				else{$controllerUser = 0; echo "<p class='texto_principal'>Ingrese un curp valido</p>";}
				

				if ($controllerUser == 1) {
					if ($peso >= 44) {
						$controllerUser = 1;
					}
					else{$controllerUser = 0; echo "<p class='texto_principal'>El peso esta por debajo del minimo requerido</p>";}
				}

				if  ($controllerUser == 1) {
					
					if ($peso <= 96) {
						$controllerUser = 1;
					}
					else{$controllerUser = 0; echo "<p class='texto_principal'>El peso esta por arriba del maximo requerido</p>";}
				}

				if ($controllerUser == 1) {
					if ($estatura >=1.50 ) {
						$controllerUser = 1;
					}
					else{$controllerUser = 0; echo "<p class='texto_principal'>La altura esta por debajo del minimo requerido</p>";}
				}


				if  ($controllerUser == 1) {
					
					if ($estatura <= 1.80) {
						$controllerUser = 1;
					}
					else{$controllerUser = 0; echo "<p class='texto_principal'>La altura esta por arriba del maximo requerido</p>";}
				}
				




				if ($controllerUser == 1) {
					$validacionConsulta = "SELECT * FROM usuarios_datos_basicos WHERE 
					nombre_g           = '$name_txt' and
					apellido_p		   = '$apell_uno' and
					apellido_m         = '$apell_dos' and
					edad               = '$nacimiento_date' and
					curp               = '$curp_txt' and
					#usuario            = '$usuario_txt' and
					calle              = '$calle_txt' and
					colonia            = '$colonia' and
					num_exterior       = '$num_ext' and
					num_interior       = '$num_int' and
					codigo_postal      = '$postal' and
					entidad            = '$entidad_slc' and
					demarcacion        = '$demarcacion' and
					num_movil          = '$num_mobil' and
					pass_xc            = '$pass_txt' and
					inmueble_asign	   = '$inmueble_slc' and
					#supervisor         = '$supervisor' and
					costo_serv         = '$costo' and
					turno              = '$turno' and 
					tipo_pago          = '$type_pago' and 
					fecha_inicio_contrato  =  '$inicio_contr' and
					fecha_finalizacion     =  '$final_contr'
					";

					$validacionEjecutar = mysqli_query($enlace,$validacionConsulta);  
					$validacionController = mysqli_num_rows($validacionEjecutar);	
					

					if ($validacionController == 0) {
						$controllerUser = 1;
					}
					else{
						$controllerUser = 0; echo "<p class='texto_principal'>Los datos ya se habian insertado</p>";
					}

				}

				if ($controllerUser == 1) {

						$inmuebleConsulta = "SELECT name_inmueble,cliente FROM inmuebles WHERE id_inmueble='$inmueble_slc'";
						$inmuebleEjecutar = mysqli_query($enlace,$inmuebleConsulta);
						$inmuebleArray    = mysqli_fetch_array($inmuebleEjecutar);
						$name_inmueble    = $inmuebleArray[0];
						$name_cliente     = $inmuebleArray[1];


						$empresaConsulta  = "SELECT id_cliente FROM clientes WHERE name_cliente = '$name_cliente'";
						$empresaEjecutar  = mysqli_query($enlace,$empresaConsulta);
						$empresaArray     = mysqli_fetch_array($empresaEjecutar);
						$id_cliente       = $empresaArray[0];

					
						$validacionCurp = "SELECT curp FROM usuarios_datos_basicos WHERE curp ='$curp_txt'";
						$validacionCurpEjec = mysqli_query($enlace,$validacionCurp);
						$validacionCurpCont = mysqli_num_rows($validacionCurpEjec);
						if ($validacionCurpCont == 0) {

							$segundos= strtotime('now')-strtotime($nacimiento_date);
							$diferencia_dias=intval($segundos/60/60/24);
							$date_edadNON = $diferencia_dias/365;
							$date_final   = substr($date_edadNON, 0,2);


							include("insertarDatos.php");


													
							
						}
						else{
							echo "<p class='texto_principal'>Ese usuario ya estaba registrado</p>"; 
						}
	
				}

				
			


			}
			else{
				echo "<p class='texto_principal'>No llenaste todos los datos del formulario</p>";
			}


		}
		else{

			echo "<p class='texto_principal'>Error al cargar los datos</p>";
		}
	} 
	else{
		echo "<p class='texto_principal'>Error</p>";
	}
	
?>
