
        $(function(){
                $("#btn-alta-inmueble").click(function(){
                    var url="../../panel_sys/inmuebles/admin/crear/procesar_inmueble.php";
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
            $(document).on("click","#btn-alta-user",function(){

                var formData = new FormData($("#alta_usuario")[0]);

                var ruta = "../../panel_sys/personal/admin/crear_guardia/procesar_formUser.php";

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









/****************Ajax cambiar puesto***********************************************/
/**********************************************************************************/
        $(function(){
          $(document).on("click","#btn-cambio-user",function(){
                    var url="../../panel_sys/personal/admin/editar_puesto/procesar_cambioPuesto.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#cambio_usuarioPuesto").serialize(),
                        success:function(data){
                            $("#m_v").html(data);
                        }

                    });

                    return false;
                });
            });

        $(document).on("change","#empresa_slc_cambioPuesto",function(){
                   $("#empresa_slc_cambioPuesto option:selected").each(function () {
                    elegid=$(this).val();
                    $.post("../../panel_sys/personal/admin/editar_puesto/inmuebles_selectPuesto.php", { elegid: elegid }, function(data){
                    $("#inm_slc_cambioPuesto").html(data);
                    
                });
           })
        });
/**********************************************************************************/
/**********************************************************************************/





        $(function(){
          $(document).on("click","#btn-alta-cliente",function(){
                    var url="../../panel_sys/personal/admin/crear_cliente/procesar_formCliente.php";
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
                    var url="../../panel_sys/registros_es/supervisor/procesarRegistro_supervisor.php";
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
                    var url="../../panel_sys/registros_es/supervisor/procesarSalida_supervisor.php";
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
                    $.post("../../panel_sys/personal/admin/crear_guardia/mostrar_supervisor.php", { elegid: elegid }, function(data){
                    $("#supervisor").html(data);
                    
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
                    $.post("../../panel_sys/personal/cliente/inmueblesAjax.php", { personal: personal }, function(data){
                    $("#inmuebles_personal").html(data);
                    
                });
           })
        });

        $(document).on("change","#inmuebles_personal",function(){
                   $("#inmuebles_personal option:selected").each(function () {
                    personal=$(this).val();
                    $.post("../../panel_sys/personal/cliente/listado_personalAjax.php", { personal: personal }, function(data){
                    $("#listado_personal").html(data);
                    
                });
           })
        });

        $(document).on("change","#select_registro_supervisor",function(){
                   $("#select_registro_supervisor option:selected").each(function () {
                    registros_es=$(this).val();
                    $.post("../../panel_sys/registros_es/supervisor/procesar_selectSupervisor.php", { registros_es: registros_es }, function(data){
                    $("#campo_inmueble").html(data);
                    
                });
           })
        });


        /***********************************************************************************************/
        /********ajax reporte checklist***************************************/
        /***********************************************************************************************/

        $(function(){
        $(document).on("click","#guardar_reporteChecklist",function(){
                    var url="../../panel_sys/registros_es/guardia/procesar_checklistGuardia.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form-reporteChecklist").serialize(),
                        dataType:"json",
                        success:function(data){
                            $("#mensaje_reporteChecklist").html(data.uno);
                            $("#habilitar_btnSalir").html(data.dos);
                        }

                    });

                    return false;
                });
            });


        /***********************************************************************************************/
        /********ajax registro_es guardia***************************************/
        /***********************************************************************************************/

        $(function(){
        $(document).on("click","#btn-registroGuardia",function(){
                    var url="../../panel_sys/registros_es/guardia/procesarRegistro_guardia.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form-registroGuardia").serialize(),
                        dataType:"json",
                        success:function(data){
                            $("#deshabilitar_form").html(data.uno);
                            $("#mensaje-registroGuardia").html(data.dos);
                        }

                    });

                    return false;
                });
            });
        /***********************************************************************************************/
        /********ajax levantar reporte guardia***************************************/
        /***********************************************************************************************/

        $(function(){
        $(document).on("click","#guardar_reporteGuardia",function(){
                    var url="../../panel_sys/reportes/guardia/procesar_reporteGuardia.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_reporte_guardia").serialize(),
                        success:function(data){
                            $("#mensaje_reporteGuardia").html(data);
                        }

                    });

                    return false;
                });
        });



        /***********************************************************************************************/
        /********ajax levantar reporte general supervisor cliente***************************************/
        /***********************************************************************************************/

        $(function(){
        $(document).on("click","#guardar_reporteGeneral",function(){
                    var url="../../panel_sys/reportes/extraordinario/procesar_reporteCliente.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_reporte_General").serialize(),
                        success:function(data){
                            $("#mensaje_reporteGeneral").html(data);
                        }

                    });

                    return false;
                });
        });

        /***********************************************************************************************/
        /********Multi select cliente-inmuebles usuario***************************************/
        /***********************************************************************************************/

        $(document).on("change","#cliente_reporteCliente",function(){
                   $("#cliente_reporteCliente option:selected").each(function () {
                    cliente=$(this).val();
                    $.post("../../panel_sys/reportes/extraordinario/multi_selectClienteAjax.php", { cliente: cliente }, function(data){
                    $("#inmuebles_reporteCliente").html(data);
                    
                });
           })
        });

        /***********************************************************************************************/
        /********Multi select estado municipio zona inmueble***************************************/
        /***********************************************************************************************/      
        $(document).on("change","#estado_zona",function(){
                   $("#estado_zona option:selected").each(function () {
                    zonas=$(this).val();
                    $.post("../../panel_sys/inmuebles/admin/crear/lista_zonas.php", { zonas: zonas }, function(data){
                    $("#zona_zona").html(data);
                    
                });
           })
        });


        /***********************************************************************************************/
        /********Multi select estado municipio personal***************************************/
        /***********************************************************************************************/      
        $(document).on("change","#estado_ad",function(){
                   $("#estado_ad option:selected").each(function () {
                    municipio=$(this).val();
                    $.post("../../panel_sys/personal/admin/crear_guardia/multiselect_estados.php", { municipio: municipio }, function(data){
                    $("#municipio_ad").html(data);
                    
                });
           })
        });

        /***********************************************************************************************/
        /********Baja guardias ***************************************/
        /***********************************************************************************************/      

          $(function(){
          $(document).on("click","#btn_bajaElementos",function(){
                    var url="../../panel_sys/personal/admin/eliminar/procesar_bajaGuardia.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_bajaElementos").serialize(),
                        success:function(data){
                            $("#mensaje_bajaElementos").html(data);
                        }

                    });

                    return false;
                });
            });





        /***********************************************************************************************/
        /********Select listado inmuebles admin***************************************/
        /***********************************************************************************************/      
        $(document).on("change","#select_porZona",function(){
                   $("#select_porZona option:selected").each(function () {
                    porzona=$(this).val();
                    $.post("../../panel_sys/inmuebles/admin/tablas_ajaxInmuebles.php", { porzona: porzona }, function(data){
                    $("#tablaInmueble").html(data);
                    
                });
           })
        });

        $(document).on("change","#select_porEmpresa",function(){
                   $("#select_porEmpresa option:selected").each(function () {
                    porempresa=$(this).val();
                    $.post("../../panel_sys/inmuebles/admin/tablas_ajaxInmuebles.php", { porempresa: porempresa }, function(data){
                    $("#tablaInmueble").html(data);
                    
                });
           })
        });


        /***********************************************************************************************/
        /********Select listado repo estado inmuebles***************************************/
        /***********************************************************************************************/

        $(document).on("change","#estadoRepoInmueble",function(){
                   $("#estadoRepoInmueble option:selected").each(function () {
                    typerepo=$(this).val();
                    $.post("../../panel_sys/inmuebles/evaluadorRepo_inmueble.php", { typerepo: typerepo}, function(data){
                    $("#typeRepoInmueble").html(data);
                    
                });
           })
        });

        /***********************************************************************************************/
        /********Select listado de inmuebles-usuarios para dar de baja a un usuario************************/
        /***********************************************************************************************/

        $(document).on("change","#cliente_personalBaja",function(){
                   $("#cliente_personalBaja option:selected").each(function () {
                    personal=$(this).val();
                    $.post("../../panel_sys/personal/admin/eliminar/inmueblesAjax.php", { personal: personal }, function(data){
                    $("#consulta-lista-personal").html(data);
                    
                });
           })
        });

        $(document).on("change","#inmuebles_personalBaja",function(){
                   $("#inmuebles_personalBaja option:selected").each(function () {
                    personal=$(this).val();
                    $.post("../../panel_sys/personal/admin/eliminar/tabla_usuariosBaja.php", { personal: personal }, function(data){
                    $("#listado_personalBaja").html(data);
                    
                });
           })
        });

        /******************************************************************************************************/

        $(function(){
                $("#btn_bajaInmuebles").click(function(){
                    var url="../../panel_sys/inmuebles/admin/eliminar/procesar_bajaInmueble.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_inmueblesBaja").serialize(),

                        success:function(data){
                            $("#mensaje_bajaInmuebles").html(data);                
                        }

                    });
                    return false;
                });
            });

        /******************************************************************************************************/

        $(function(){
                $("#btn_bajaCheck").click(function(){
                    var url="../../panel_sys/checklist/baja/procesar_bajaChecklist.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_bajaCheck").serialize(),

                        success:function(data){
                            $("#mensaje_bajaCheck").html(data);                
                        }

                    });
                    return false;
                });
            });    


        /****************Modificar datos costos guardia*****************************/
        $(function(){
            $(document).on("click","#guardar_servicioGuardia",function(){
                    var url="../../panel_sys/servicios/admin/procesar_servicioCostoGuardia.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_costosServicioGuardia").serialize(),
                        success:function(data){
                            $("#mensaje_sg").html(data);
                        }

                    });
                    return false;
                });
            });

        /****************Modificar datos costos extraordinarios guardia *************************/

        $(function(){
            $(document).on("click","#guardar_servicioGuardiaExtra",function(){
                    var url="../../panel_sys/servicios/admin/procesar_servicioCostoGuardiaExtra.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_costosServicioGuardiaExtra").serialize(),
                        success:function(data){
                            $("#mensaje_sgExt").html(data);
                        }

                    });

                    return false;
                });
            });

        /****************Modificar datos costos supervisor *************************/

        $(function(){
            $(document).on("click","#guardar_servicioSupervisor",function(){
                    var url="../../panel_sys/servicios/admin/procesar_servicioCostoSupervisor.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_costosServicioSupervisor").serialize(),
                        success:function(data){
                            $("#mensaje_ss").html(data);
                        }

                    });

                    return false;
                });
            });

        $(function(){
            $(document).on("click","#guardar_servicioSupervisorExt",function(){
                    var url="../../panel_sys/servicios/admin/procesar_servicioCostoSupervisor.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_costosServicioSupervisorExt").serialize(),
                        success:function(data){
                            $("#mensaje_ssExt").html(data);
                        }

                    });

                    return false;
                });
            });

        /***********************************************************************************************/
        /********inmuebles_repoSelectAjax ***************************************/
        /***********************************************************************************************/

        $(document).on("change","#empresa_repo",function(){
                   $("#empresa_repo option:selected").each(function () {
                    empresa=$(this).val();
                    $.post("../../panel_sys/reportes/inmuebles_repoSelectAjax.php", { empresa: empresa}, function(data){
                    $("#inmueble_repo").html(data);
                    
                });
           })
        });
        /***************Generar reporte de asistencia**************************************************/
        $(function(){
            $(document).on("click","#btn_generarRepoAs",function(){
                    var url="../../panel_sys/reportes/generar_repoAsistencias.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_costosServicioSupervisorExt").serialize(),
                        success:function(data){
                            $("#mensaje_ssExt").html(data);
                        }

                    });

                    return false;
                });
            });

        /**********************************************************************************************/
        /**********************Asignar jefe turno *****************************************************/

        $(function(){
          $(document).on("click","#btn_jefeturno",function(){
                    var url="../../panel_sys/personal/supervisor/jefeTurno/asignar_jefeturno.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_jefeturno").serialize(),
                        success:function(data){
                            $("#jefeturno").html(data);
                        }

                    });

                    return false;
                });
            });


        /**************************************************************************************************/
        $(document).on("change","#buscar_para",function(){
                    $("#buscar_para option:selected").each(function () {
                        busq=$(this).val();
                        $.post("../../panel_sys/opcionesUsuarios/opciones_busquedasAjax.php", { busq: busq}, function(data){
                        $("#etiqueta_b").html(data);    
                    });
                })
        });


        