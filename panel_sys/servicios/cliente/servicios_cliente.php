<?php 
  if ($nav=='servicios') {
      echo "<h4 class='texto_principal'>Listado de servicios</h4><p class='texto_principal'>Seleccione una empresa en la parte de arriba</p>";
  }
?>

<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
    <thead>
        <tr>   
          <th style='color:white;'>Nombre</th>
          <th style='color:white;'>Supervisor</th>
          <th style='color:white;'>Jefe de turno</th>
          <th style='color:white;'>Turno</th>
          <th style='color:white;'>Horario</th>
          <th style='color:white;'>Fecha de inicio</th>
        </tr>
    </thead>
    <tbody>
      <?php  
          $servicios_empresa  = substr($nav,10);
          $servicios_consulta = "SELECT name_cliente FROM clientes WHERE name_get = '$servicios_empresa'";
          $servicios_consulta = mysqli_query($enlace,$servicios_consulta) or die("no");
          $servicios_consulta = mysqli_fetch_array($servicios_consulta);
          $name_cliente       = $servicios_consulta[0];

          $consulta_inmuebles = "SELECT name_inmueble,supervisor FROM inmuebles WHERE cliente='$name_cliente'";
          $consulta_inmuebles = mysqli_query($enlace,$consulta_inmuebles);
          while ($array = mysqli_fetch_array($consulta_inmuebles)) {
            $inmueble   = $array[0];
            $supervisor = $array[1];

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



            ?>
            <tr>
                <td><?php echo $inmueble; ?></td>
                <td><?php echo $supervisorTable; ?></td>
                <td>por asignar</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
            </tr>

            <?php

          }      
      ?>
    </tbody>
</table>