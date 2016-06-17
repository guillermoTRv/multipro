<div class="row">
  <div class="col-md-3">
    <label>Por empresa</label>
    <select id="select_porEmpresa" class="form-control select-sm_user" style='margin:0px;' >
      <option>--</option>
      <?php include("panel_sys/empresas_option.php"); ?>
    </select>
  </div>
  <div class="col-md-3">
    <label>Por zona</label>
    <select id="select_porZona" class="form-control select-sm_user" style='margin:0px;' >
      <option>--</option>
        <?php  
          $consultaZonas = "SELECT * FROM zonas order by id_zona asc";
          $consultaZonas = mysqli_query($enlace,$consultaZonas);
          while ($arrayZonas = mysqli_fetch_array($consultaZonas) ) {
            $name_zona = $arrayZonas[1];
            echo "<option value='$name_zona'>$name_zona</option>";
          }
        ?>
    </select>
  </div>  
</div>
<div id="tablaInmueble">
  <br>
  <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
    <thead>
      <tr>   
        <th style='color:white;'>Nombre inmueble</th>
        <th style='color:white;'>Direccion</th>
        <th style='color:white;'>Supervisor</th>
        <th style='color:white;'>#</th>
      </tr>
    </thead>
  </table>                  
</div>
