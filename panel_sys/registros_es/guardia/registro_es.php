		<div style='border:2px solid #e06000;margin-bottom:20px;'>	
				   <div class="row" style='background-color:rgba(0, 0, 0, .4);margin-left:1px;margin-right:1px;margin-top:1px;padding-left:12px;border-bottom:1px solid #e06000;'>
                     <center>
                     	<h3 style='margin-bottom:20px;margin-top:20px;margin-left:-14px;color:#f2f2f2;'>Asistencias</h3>
                     </center>
            </div>
 
                   <div class="row" style='margin-top:70px;'>
                       <div class="col-md-5 col-md-offset-2">
                         <a style='width:170px;font-size:1.2em;' class='btn btn-sm btn-ind'> Registrar entrada </a>
                       </div>
                       <div class="col-md-5 pull-right">
                         <a style='width:170px;font-size:1.2em;' class='btn btn-sm btn-ind disabled'> Registrar salida </a>
                       </div>
                   </div>
 
                   <div class="row">
                     <div class="col-md-6 col-md-offset-3">
                         <h3 class='mens_bienvenida' style='text-align:center;color:#f2f2f2;'>
                           ¡Que tenga un dia muy productivo!
                         </h3>
                     </div>
                   </div>
 

                   <?php  
                    if ($type_user == "guardia") {
                    ?>  
                    
                   <div class="row" style='margin-top:40px;padding-left:20px;padding-right:20px;'>
                     <div class="col-md-10 col-md-offset-1" style='padding-top:4px;padding-bottom:-4px;background-color:rgba(0,0,0,.5);border:solid 1px white;border-radius:3px;'>
                        <center>
                          <p style='margin-bottom:4px;color:white'>Check list</p>
                        </center>
                     </div>
                   </div>
 
                   <div class="row  espacio_input" style='margin-top:20px;'>
                      <div class="col-md-10 col-md-offset-1" style='background-color:rgba(0,0,0,.5);border-radius:5px;'>
                        
                        <div class="row">
                          <div class="col-md-3">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> <p>Revisar alarmas</p>
                                </label>
                              </div>
                          </div>  

                          <div class="col-md-3">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> <p>Extintores</p>
                                </label>
                              </div>
                          </div>  

                          <div class="col-md-3">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> <p>Goteras</p>
                                </label>
                              </div>
                          </div>  

                          <div class="col-md-3">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> <p>Botiquin</p>
                                </label>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> <p>Salida de emergencia</p>
                                </label>
                              </div>
                          </div>  

                          <div class="col-md-3">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> <p>Revisar Accesos</p>
                                </label>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> <p>Columna agrietada</p>
                                </label>
                              </div>
                          </div>  

                        </div>

                      </div>
                    </div>
                    <br><br>
                    <?php
                    }
                    if ($type_user == "supervisor") {
                      ?><br><br><br><br><?php
                    }
                   ?>
                </div>