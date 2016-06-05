  <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
    <thead>
      <tr>
        <th style='color:white;'>Nombre</th>
        <th style='color:white;'>Usuario</th>
        <th style='color:white'>Fecha de registro</th>
        <th style='color:white'>#</th>        
      </tr>
    </thead>
     <tbody>
        <?php 
          $consultaCliente = "SELECT * FROM clientes_usuarios order by id_clienteuser desc";
          $consultaCliente = mysqli_query($enlace,$consultaCliente) or die("noa");
          while ($consultaArray = mysqli_fetch_array($consultaCliente)) {
                 
                 $nombre_g    =  $consultaArray['nombre_g'];
                 $apellido_p  =  $consultaArray['apellido_p'];
                 $apellido_m  =  $consultaArray['apellido_m'];
                 $usuario     =  $consultaArray['nombre_usuario'];
                 $fecha_bd    =  $consultaArray['fecha_registro_bd'];

                 $fecha       =  substr($fecha_bd,0,9);

                 ?> 
                 <tr>
                   <td><?php echo $nombre_g."&nbsp;".$apellido_p."&nbsp;".$apellido_m ?></td>
                   <td><?php echo $usuario ?></td>
                   <td><?php echo $fecha ?></td>
                   <td><span class='glyphicon glyphicon-asterisk' style='color:green;'></td> 
                 </tr>
                 <?php


          }
        ?>
     </tbody>
  </table>
