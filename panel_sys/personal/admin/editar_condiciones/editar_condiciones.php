<?php 
  function horario(){
    for ($i=0; $i<10 ; $i++) { 
      $horario = "0".$i;
      echo "<option value='$horario'>$horario</option>";
    }
    for ($i=10; $i < 25 ; $i++) { 
      $horario = $i;
      echo "<option value='$horario'>$horario</option>";  
    }
  }
?>
<div class="row">
  <div class="col-md-8" style="padding-left:20px;">
      <p class='texto_principal'>Modificacion de horario-turno</p>
      <hr>
      <form style="margin-bottom:40px">
        <div class="form-group">
          <label>Turno</label>
            <select class='form-control input-sm' style='margin-top:-0px;' name='turno'>
              <option value=''>--</option>
              <option style='12-12'>12-12</option>
              <option style='12-24'>12-24</option>
            </select>
        </div>

        <div class="form-group">
          <label>Horario</label>
              <select class='form-control input-sm' style='margin-top:-0px;' name='hora_1'>
                <option value=''>--</option>
                <?php $horas = horario(); ?>
              </select>
        </div>        
        
        <div class="form-grup">
              <select class='form-control input-sm' style='margin-top:-0px;' name='hora_2'>
                  <option value=''>--</option>
                  <?php $horas = horario(); ?>
              </select>  
        </div>
        

      </form>    
  </div>
</div>