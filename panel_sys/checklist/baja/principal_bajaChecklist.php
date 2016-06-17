<?php 

  $empresaSubstr = substr($nav,11);
  $idEmpresaCheckBusqueda = "SELECT id_cliente FROM clientes WHERE name_get = '$empresaSubstr'";
  $idEmpresaCheckEjecutar = mysqli_query($enlace,$idEmpresaCheckBusqueda);
  $idArray                = mysqli_fetch_array($idEmpresaCheckEjecutar);
  $idEmpresaCheck         = $idArray['id_cliente'];

?>

<?php 
  if ($nav == "baja_check") {
        echo "<h4 class='texto_principal'>Baja de checklist</h4><p class='texto_principal'>Seleccione una empresa en la parte de arriba</p>";
  }

  else{
    ?>  <p class="texto_principal">Eliminar checklist para <?php echo $empresaSubstr ?></p>
        <form id="form_bajaCheck">
        <?php echo "<input type='hidden' name='empresaCheck' value='$idEmpresaCheck'>"; ?>
        <table class="table table-striped " style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr style='color:white;font-size:1.1em;'>   
                          <th>----</th>
                          <th>Categoria</th>
                          <th>Situación</th>
                          <th>Empresa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $listadoCheckConsulta = "SELECT * FROM check_list WHERE id_empresa = '$idEmpresaCheck'"; 
                          $listadoCheckEjecutar = mysqli_query($enlace,$listadoCheckConsulta);
                          while ( $chekArray = mysqli_fetch_array($listadoCheckEjecutar)) {
                            $id_checklist = $chekArray['id_checklist'];
                            $categoria = $chekArray['categoria'];
                            $situacion = $chekArray['situacion_name'];

                            ?>
                              <tr>
                                <td>
                                  <?php echo "
                                      <input type='checkbox' name='check-$id_checklist' value='$id_checklist'>
                                  "; 
                                  ?>
                                </td>
                                <td><?php echo $categoria; ?></td>
                                <td><?php echo $situacion; ?></td>
                                <td><?php echo $empresaSubstr;?></td>
                              </tr>
                            <?php

                          }
                        ?>
                    </tbody>
        </table>
        </form>
    <?php

  }
?>
