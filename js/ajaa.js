
        $(function(){
                $("#btn-alta-inmueble").click(function(){
                    var url="../../panel_sys/inmuebles/crear/procesar_inmueble.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#crear_inmueble").serialize(),

                        success:function(data){
                            $("#m_v").html(data);                
                        }

                    });
                    return false;
                });
            });

        $(function(){
                $("#btn-alta-user").click(function(){
                    var url="../../panel_sys/crear_user/procesar_formUser.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#alta_usuario").serialize(),

                        success:function(data){
                            $("#m_v").html(data);                
                        }

                    });
                    return false;
                });
            });


        $(function(){
          $(document).on("click","#btn-cambio-user",function(){
                    var url="../../panel_sys/cambio_usuario/procesar_cambio.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#cambio_usuario").serialize(),
                        success:function(data){
                            $("#m_v").html(data);
                        }

                    });

                    return false;
                });
            });

        $(function(){
          $(document).on("click","#btn-alta-cliente",function(){
                    var url="../../panel_sys/crear_user/procesar_formCliente.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#alta_cliente").serialize(),
                        success:function(data){
                            $("#m_cliente").html(data);
                        }

                    });

                    return false;
                });
            });



        $(function(){
        $(document).on("click","#btn-registroSupervisor",function(){
                    var url="../../panel_sys/varias_funciones/registros_es/procesarRegistro_supervisor.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form-registroSupervisor").serialize(),
                        dataType:"json",
                        success:function(data){
                            $("#deshabilitar_form").html(data.uno);
                            $("#mensaje-registroSupervisor").html(data.dos);
                        }

                    });

                    return false;
                });
            });


        $(function(){
          $(document).on("click","#btn-salidaSupervisor",function(){
                    var url="../../panel_sys/varias_funciones/registros_es/procesarSalida_supervisor.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form-salidaSupervisor").serialize(),
                        dataType:"json",
                        success:function(data){
                            $("#deshabilitar_formSalida").html(data.uno);
                            $("#mensaje-salidaSupervisor").html(data.dos);
                        }

                    });

                    return false;
                });
            });




        $(document).on("change","#inmueble_slc",function(){
                   $("#inmueble_slc option:selected").each(function () {
                    elegid=$(this).val();
                    $.post("../../panel_sys/crear_user/mostrar_supervisor.php", { elegid: elegid }, function(data){
                    $("#supervisor").html(data);
                    
                });
           })
        });

        $(document).on("change","#empresa_slc",function(){
                   $("#empresa_slc option:selected").each(function () {
                    elegid=$(this).val();
                    $.post("../../panel_sys/cambio_usuario/inmuebles_select.php", { elegid: elegid }, function(data){
                    $("#inm_slc").html(data);
                    
                });
           })
        });

        $(document).on("change","#cliente_check",function(){
                   $("#cliente_check option:selected").each(function () {
                    check=$(this).val();
                    $.post("../../panel_sys/checklist/categoria_select.php", { check: check }, function(data){
                    $("#categoria_check").html(data);
                    
                });
           })
        });

        $(document).on("change","#cliente_personal",function(){
                   $("#cliente_personal option:selected").each(function () {
                    personal=$(this).val();
                    $.post("../../panel_sys/listados/clientes/inmueblesAjax.php", { personal: personal }, function(data){
                    $("#inmuebles_personal").html(data);
                    
                });
           })
        });

        $(document).on("change","#inmuebles_personal",function(){
                   $("#inmuebles_personal option:selected").each(function () {
                    personal=$(this).val();
                    $.post("../../panel_sys/listados/clientes/listado_personalAjax.php", { personal: personal }, function(data){
                    $("#listado_personal").html(data);
                    
                });
           })
        });

        $(document).on("change","#select_registro_supervisor",function(){
                   $("#select_registro_supervisor option:selected").each(function () {
                    registros_es=$(this).val();
                    $.post("../../panel_sys/varias_funciones/registros_es/procesar_selectSupervisor.php", { registros_es: registros_es }, function(data){
                    $("#campo_inmueble").html(data);
                    
                });
           })
        });