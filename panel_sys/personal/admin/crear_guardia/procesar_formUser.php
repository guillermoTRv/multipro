<?php 

	$controller = 0;
	include("../../pack_config.php");

	session_start();
	$type_user = $_SESSION['type_user'];


	if ($type_user == 'administrador') {
			
		if ($controller == 0) {
			
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
			$inmueble_slc      =   sanitizar($_POST['inmueble_slc']);
			$supervisor        =   sanitizar($_POST['supervisor']);
			$costo             =   sanitizar($_POST['costo']);
			$turno             =   sanitizar($_POST['turno']);
			$hora_1            =   sanitizar($_POST['hora_1']);
			$hora_2            =   sanitizar($_POST['hora_2']);
			$type_pago         =   sanitizar($_POST['type_pago']);
			$inicio_contr      =   sanitizar($_POST['inicio_contrato']);		
			$final_contr       =   sanitizar($_POST['finalizacion_contrato']);	 


			if ($name_txt        !='' and 
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
				$supervisor      !='' and 
				$costo           !='' and 
				$hora_1          !='' and 
				$hora_2          !='' and 
				$type_pago       !='' and 
				$inicio_contr    !='' and
				$final_contr     !=''
				) {
				#no dejar pasar la validacion de tipos de variables
				#creo que sera necesario crear con un algoritmo el nombre del usuario
				
				

				if (preg_match("/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/", $curp_txt)) {
					$controllerUser = 1;
				}
				else{$controllerUser = 0; echo "Ingrese un curp valido";}

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
					supervisor         = '$supervisor' and
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


							$insertarDatos = "INSERT INTO usuarios_datos_basicos
							(nombre_g,
							 apellido_p,
							 apellido_m,
							 edad,
							 curp,
							 usuario,

							 calle,
							 colonia,
							 num_exterior,
							 num_interior,
							 codigo_postal,
							 entidad,
							 demarcacion,
							 num_movil,
							 
							 name_img,
							 pass_xc,
							 
							 inmueble_asign,
							 supervisor,
							 costo_serv,
							 turno,
							 horario_laboral,
							 tipo_pago,

							 fecha_inicio_contrato,
							 fecha_finalizacion,
							 fecha_registro_bd,
							 estado_repo,
							 puesto,
							 empresa
							 ) VALUES(
							 '$name_txt',
							 '$apell_uno',
							 '$apell_dos',
							 '$date_final',
							 '$curp_txt',
							 '--',
							 '$calle_txt',
							 '$colonia',
							 '$num_ext',
							 '$num_int',
							 '$postal',
							 '$entidad_slc',
							 '$demarcacion',
							 '$num_mobil',
							 'as',
							 '$pass_txt',
							 '$name_inmueble',
							 '$supervisor',
							 '$costo',
							 '$turno',
							 '12',
							 '$type_pago',
							 '$inicio_contr',
							 '$final_contr',
							 '$fecha',
							 'no',
							 'guardia',
							 '$id_cliente'
							 )";
							$insertarDatosEjec = mysqli_query($enlace,$insertarDatos) or die("que onda");

							$buscarIdparaNombre  = "SELECT id_usuario FROM usuarios_datos_basicos WHERE curp = '$curp_txt'";
							$buscarIdparaNombre  = mysqli_query($enlace,$buscarIdparaNombre);
							$buscarIdparaNombre  = mysqli_fetch_array($buscarIdparaNombre);
							echo "<br>--".$id_usuarioInsertada = $buscarIdparaNombre['id_usuario'];

							$nombreMinusculas      = strtolower($name_txt);
 
							$nombreUsuario         = $nombreMinusculas.$id_usuarioInsertada;

							$InsertarNombreUsuario = "UPDATE usuarios_datos_basicos SET usuario='$nombreUsuario' where curp ='$curp_txt'";
							$InsertarNombreUsuario = mysqli_query($enlace,$InsertarNombreUsuario);							



							/*
								echo "<br>".$name_txt          =   sanitizar($_POST['name_txt']);
			echo "<br>".$apell_uno         =   sanitizar($_POST['apell_uno']);
			echo "<br>".$apell_dos		   =   sanitizar($_POST['apell_dos']);	
			echo "<br>".$nacimiento_date   =   sanitizar($_POST['nacimiento_date']);
			echo "<br>".$curp_txt          =   sanitizar($_POST['curp_txt']); 
			echo "<br>".$usuario_txt       =   sanitizar($_POST['usuario_txt']);       
			
			echo "<br>".$pass_txt          =   sanitizar($_POST['pass_txt']);
			echo "<br>".$calle_txt         =   sanitizar($_POST['calle_txt']);
			echo "<br>".$num_ext           =   sanitizar($_POST['num_ext']);
			echo "<br>".$num_int           =   sanitizar($_POST['num_int']);
			echo "<br>".$colonia           =   sanitizar($_POST['colonia']);
			echo "<br>".$postal            =   sanitizar($_POST['postal']);
			echo "<br>".$entidad_slc       =   sanitizar($_POST['entidad_slc']);
			
			echo "<br>".$demarcacion       =   sanitizar($_POST['demarcacion_slc']);
			echo "<br>".$num_mobil         =   sanitizar($_POST['mobil']);
			echo "<br>".$inmueble_slc      =   sanitizar($_POST['inmueble_slc']);
			echo "<br>".$supervisor        =   sanitizar($_POST['supervisor']);
			echo "<br>".$costo             =   sanitizar($_POST['costo']);
			echo "<br>".$turno             =   sanitizar($_POST['turno']);
			echo "<br>".$hora_1            =   sanitizar($_POST['hora_1']);
			echo "<br>".$hora_2            =   sanitizar($_POST['hora_2']);
			echo "<br>".$type_pago         =   sanitizar($_POST['type_pago']);
			echo "<br>".$inicio_contr      =   sanitizar($_POST['inicio_contrato']);		
			echo "<br>".$final_contr       =   sanitizar($_POST['finalizacion_contrato']);	 

							*/

							ECHO "<p class='texto_principal'>El registro ah sido exitoso</p>
							      <p class='texto_principal'>El nombre del usuario es $nombreUsuario</p>";
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

<?php 
/*
	$curp = $_POST['curp_txt'];


	if (preg_match("/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/", $curp)) {
		echo "si";
	}
	else{echo "no";}

	echo "<br>".$nacimiento_date   =   $_POST['nacimiento_date']; # necesitamos hacer nuestras restas para calcular la edad del usuario 
	
	$fecha                =  date("Y-m-d");

$segundos= strtotime('now')-strtotime($nacimiento_date);
$diferencia_dias=intval($segundos/60/60/24);

$date_final = $diferencia_dias/365;
*/
?>
