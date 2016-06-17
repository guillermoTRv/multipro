<?php
	include("../../../cfg.php");
	include("../../../sanitizar.php");
	include("../../../ruta.php");
	$porZona     =  sanitizar($_POST['porzona']); 
	$porEmpresa  =  sanitizar($_POST['porempresa']);

	if ($porEmpresa!='') {
		  $inmuebles_c     = "SELECT id_inmueble,name_inmueble,calle,colonia,num_exterior,num_interior,demarcacion,supervisor,estado_repo FROM inmuebles WHERE empresa='$porEmpresa' ORDER BY id_inmueble ASC"; 
		  $cl = "SELECT name_cliente FROM clientes WHERE id_cliente = '$porEmpresa'";
		  $cl = mysqli_query($enlace,$cl);
		  $cl = mysqli_fetch_array($cl);
		  $cl = $cl['name_cliente'];
        $mansajeInmuebles = "Listado de inmuebles para $cl";
	}
	if ($porZona!='') {
		  $inmuebles_c      = "SELECT id_inmueble,name_inmueble,calle,colonia,num_exterior,num_interior,demarcacion,supervisor,estado_repo FROM inmuebles WHERE zona = '$porZona' ORDER BY id_inmueble ASC";
        $mansajeInmuebles = "Listado de inmuebles para $porZona";
	}


  session_start();
  $type_user       =  $_SESSION['type_user'];
  if ($type_user == 'administrador') {
      $var_ruta = "admin";
  } 
  if ($type_user == 'cliente') {
      $var_ruta = "cliente";
  }
?>

<br>
<p class="texto_principal"><?php echo $mansajeInmuebles; ?></p>
<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>   
                          <th style='color:white;'>Nombre inmueble</th>
                          <th style='color:white;'>Direccion</th>
                          <th style='color:white;'>Supervisor</th>
                          <th style='color:white;'>#</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $inmuebles_e = mysqli_query($enlace,$inmuebles_c);
                        while ($array = mysqli_fetch_array($inmuebles_e)) {
                              $id_inmueble   = $array['id_inmueble']; 
                              $nombre        = $array['name_inmueble'];
                              $calle         = $array['calle'];
                              $colonia       = $array['colonia'];
                              $num_exterior  = $array['num_exterior'];
                              $num_interior  = $array['num_interior'];
                              $demarcacion   = $array['demarcacion'];
                              #revisar la codificacion de los campos en las bases de datos


                              
                              
                              $id_supervisor = $array['supervisor'];
                              
                              if ($id_supervisor != "Aun no cuenta") {
                                  $nameConsulta  = "SELECT nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE id_usuario = '$id_supervisor'";
                                     $nameConsulta    = mysqli_query($enlace,$nameConsulta) or die("nop");
                                     $nameConsulta    = mysqli_fetch_array($nameConsulta);
                                     $nameUsuario     = $nameConsulta['nombre_g'];
                                     $apellidoP       = $nameConsulta['apellido_p'];
                                     $apellido_M      = $nameConsulta['apellido_m'];

                                     #$supervisorTable = $id_supervisor;
                                     $supervisorTable = $nameUsuario."&nbsp;".$apellidoP."&nbsp;".$apellido_M;

                              }
                              else{
                                     $supervisorTable = $id_supervisor;
                              }
                              
                              include("../estado_repoInmueble.php");

                              ?>
                              <tr <?php echo "ondblclick='myFunction$id_inmueble()'"; ?>>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $calle."&nbsp;".$num_exterior."&nbsp;".$colonia."&nbsp;".$demarcacion ?></td>
                                <td><?php echo $supervisorTable; ?></td>
                                <td>
                                  <strong>
                                          <?php echo "<span class='glyphicon glyphicon-asterisk' style='color:$color;'><span id='$id_inmueble'style='font-size:.1em;color:rgba(0,0,0,0);'>$id_inmueble</span></span>"; ?>
                                  </strong>
                                </td>
                              </tr>

                              <?php
                              echo "
                                  <script>
                                      function myFunction$id_inmueble() 
                                        {
                                            window.location='$ruta/panel/$var_ruta/inmuebles-datos-'+document.getElementById('$id_inmueble').innerHTML;
                                        }
                                  </script>
                                   ";
                         } 
                      ?>
                    </tbody>
</table>  