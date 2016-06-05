<?php 
  
  $empresaSubstr = substr($nav,6);
  $idEmpresaCheckBusqueda = "SELECT id_cliente FROM clientes WHERE name_get = '$empresaSubstr'";
  $idEmpresaCheckEjecutar = mysqli_query($enlace,$idEmpresaCheckBusqueda);
  $idArray                = mysqli_fetch_array($idEmpresaCheckEjecutar);
  $idEmpresaCheck         = $idArray['id_cliente'];

?>

<?php 
  if ($empresaSubstr == "admin") {
        echo "<h4 class='texto_principal'>Administración de checklist</h4><p class='texto_principal'>Seleccione una empresa en la parte de arriba</p>";
  }
  else{
    ?>
        <table class="table table-striped " style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>   
                          <th style='color:white;font-size:1.1em;'>Categoria</th>
                          <th style='color:white;font-size:1.1em;'>Situación</th>
                          <th style='color:white;font-size:1.1em;'>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $listadoCheckConsulta = "SELECT * FROM check_list WHERE id_empresa = '$idEmpresaCheck'"; 
                          $listadoCheckEjecutar = mysqli_query($enlace,$listadoCheckConsulta);
                          while ( $chekArray = mysqli_fetch_array($listadoCheckEjecutar)) {
                            $categoria = $chekArray['categoria'];
                            $situacion = $chekArray['situacion_name'];
                            $status    = $chekArray['status'];

                            ?>
                              <tr>
                                <td><?php echo $categoria; ?></td>
                                <td><?php echo $situacion; ?></td>
                                <td><?php echo $status; ?></td>
                              </tr>
                            <?php

                          }
                        ?>
                    </tbody>
        </table>
    <?php

  }
?>
