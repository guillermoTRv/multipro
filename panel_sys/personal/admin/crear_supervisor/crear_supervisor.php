<script>
        $(function(){
            $(document).on("click","#btn-alta-supervisor",function(){

                var formData = new FormData($("#alta_usuario")[0]);

                var ruta = "../../panel_sys/personal/admin/crear_supervisor/procesar_altaSupervisor.php";

                $.ajax({

                    url: ruta,

                    type: "POST",

                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data)
                    {
                        $("#m_v").html(data);
                    }
                });
            });
         });

</script>

<div style='border:2px solid #e06000;margin-bottom:20px;'>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a  class='tab_a'href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Datos usuarios</a></li>
    <li role="presentation"><a class='tab_a' href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Datos del servicio</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane in active" id="profile">
    	<?php include("panel_sys/personal/admin/crear_guardia/formulario_crear1.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
    	<?php include("panel_sys/personal/admin/crear_supervisor/formulario_crear2.php"); ?>
    </div>
    <div style='margin:30px;' id="m_v"></div>
  </div>

</div>