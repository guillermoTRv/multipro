<div class="row">
  <div class="col-md-8" style="padding-left:20px;">
      <p class='texto_principal'>Asignar un nuevo inmueble</p>
      <hr>
      <form style="margin-bottom:40px">
        <div class="form-group">
          <label >Seleccione un inmueble</label>
          <select class="form-control input-sm">
              <?php 
                $inmueblesConsulta = "SELECT id_inmueble,name_inmueble FROM inmuebles order by id_inmueble asc";
                $inmueblesConsulta = mysqli_query($enlace,$inmueblesConsulta);
                while ($array = mysqli_fetch_array($inmueblesConsulta)) {
                    $id_inmuebleC   = $array[0];
                    $name_inmueble  = $array[1];

                    echo "<option value='$id_inmuebleC'>$name_inmueble</option>";
                  }
              ?>
          </select>
        </div>
      
        <button type="submit" class="btn btn-default btn-sm">Guardar cambios</button>
      </form>    
  </div>
</div>
