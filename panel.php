<?php 
   include("ruta.php");
   include("sanitizar.php");
   include("input_toquen.php");
   include("cfg.php");
   include("time_fecha.php");
   include("notificacion_errores.php");
   session_start();
   $type_user       =  $_SESSION['type_user'];
   $id_personal     =  $_SESSION['id_usuario'];
   $name_user       =  $_SESSION['name_user'];
    
   include("panel_sys/1_get/principal_get.php");
   
   #podriamos hacer un control de url que solo permita ciertas url y en caso de que no reconozca algun redirgir a una pagina   
   include("panel_sys/encabezado/datos_encabezado.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de uso</title>
    <link href="<?php echo $ruta ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $ruta ?>/css/css_panelll.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $ruta ?>/Iconos/apple-touch-icon-144-precomposed.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="<?php echo $ruta ?>/js/ajaxcoz.js"></script>
    <script type="text/javascript" src="../../js/table_excel.js"></script>
        <script language="javascript">
            $(document).ready(function() {
                $(".botonExcel").click(function(event) {
                    $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
                    $("#FormularioExportacion").submit();
                });
            });
    </script>
    <script src="<?php echo $ruta ?>/js/jqueryv.js"></script>
    <script src="../../js/bootstrap.js"></script>


  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
          <?php include("panel_sys/encabezado/encabezado_sys.php"); ?>
          
          <div class="row">
            <div class="col-md-1" style='margin-right:22px;'>
              
              <?php
                include("panel_sys/rutas/principal_rutas.php");
                #ignore_user_abort()
              ?>
              
            </div>
            <div class="col-md-10">
              
              <div class="row barra_nav">
                <div class="col-md-3">
                  <?php include("panel_sys/busquedas_select.php"); ?>
                </div>
                <div class="col-md-4">
                  <?php include("panel_sys/opcionesUsuarios/principalOpciones_usuarios.php"); ?>
                    
                </div>
                <div class="col-md-3 col-md-offset-2 pull-right">
                      <?php 
                        if ($user_get != 'guardia') {
                          ?>
                          <form action="../../panel_sys/buscador/procesar_busquedaUno.php" method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="search" class="form-control search_sm" name='buscador' placeholder="Search for...">
                                <span class="input-group-btn search_sm">
                                  <button class="btn btn-default" type="submit" style='height:20px;font-size:10px;padding-top:2px'>
                                    <span class="glyphicon glyphicon-search"></span>
                                  </button>
                                </span>
                            </div>
                          </form>
                          <?php
                        }
                      ?>
                </div>
              </div>
              <div class="row div_pr">
                <?php
                    include("panel_sys/2_controlador/principal_controlador.php");  
                ?>
              </div>
            </div>
          </div>  
        </div>  
      </div>
    </div>
    
    <div id="excel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="../ficheroExcel.php" method="post" id="FormularioExportacion" class="form-inline">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel" align="center">Nombre del Fichero</h3>
            </div>
            <div class="modal-body" align="center">
                <input type="text" name="nombre" autocomplete="off" placeholder="Nombre del Fichero" value="" required><br>
                <strong>Imprimir en: </strong><br>
                <select name="imp">
                    <option value="excel">Hoja de Excel</option>
                    <option value="pdf">Archivo PDF</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true"><strong>Cerrar</strong></button>
                <button type="submit" class="btn botonExcel"><i class="icon-print"></i> <strong>Imprimir Reporte</strong></button>
                <input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
            </div>
            </form>
        </div>










    <?php echo "
    <script>
      window.onload= function()
      {
        var lista= document.getElementById('consulta-lista-personal');
        lista.onchange = function()
        {
          window.location='$ruta/panel/$user_get/$ruta_select-'+lista.value;
        };
      }
    </script>";
    ?>
  </body>
</html>

