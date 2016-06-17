<div class="row">
  <div class="col-md-3">
    <label>Empresa</label>
    <select id="cliente_personal" class="form-control select-sm_user" style='margin:0px;' >
      <option value="">--</option>
      <?php 
        $clientesConsulta = "SELECT id_cliente,name_cliente FROM clientes";
        $clientesConsulta = mysqli_query($enlace,$clientesConsulta);
        while ($clientesArray = mysqli_fetch_array($clientesConsulta)) {
                
             $id_cliente    = $clientesArray['id_cliente'];
             $name_cliente  = $clientesArray['name_cliente'];

            echo "<option value='1-$id_cliente'>$name_cliente</option>";
        }
      ?>
    </select>
  </div>

  <div class="col-md-3">
    <label>Inmuebles</label>
    <select id="inmuebles_personal" class="form-control select-sm_user" style='margin:0px;' >
      
    </select>
  </div>
  

  
</div>


    <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;margin-top:15px;'>
       <thead>
          <tr>   
            <th style='color:white;'>Nombre</th>
            <th style='color:white;'>Edad</th>
            <th style='color:white;'>Domicilio</th>
            <th style='color:white;'>Horario</th>
            <th style='color:white;'>#</th>
          </tr>
       </thead>
      <tbody id="listado_personal">
      </tbody>
    </table>