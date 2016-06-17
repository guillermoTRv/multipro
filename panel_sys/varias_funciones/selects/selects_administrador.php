<?php
        if (isset($personal_nav) and empty($personal_bajas)){
            ?>
                <select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
                     <option value='guardias'     <?php selected("personal-guardias");     ?>>Guardias</option>
                     <option value='supervisores' <?php selected("personal-supervisores"); ?>>Supervisores</option>
                     <option value='clientes'     <?php selected("personal-clientes");     ?>>Clientes</option>
                </select>
            <?php
        }

        if (isset($personal_bajas)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;'>
                    
                </select>
            <?php   
        }


        if (isset($inmuebles_nav) or isset($inmuebles_zonaid)) {
            #include("panel_sys/varias_funciones/selects/select_zonaInmueble.php");
        }

        if (isset($inmuebles_bajasNav)) {
            include("panel_sys/varias_funciones/selects/select_empresasCheck.php");
        }


        if (isset($check_nav) or isset($baja_check)) {
            include("panel_sys/varias_funciones/selects/select_empresasCheck.php");
        }

        if (isset($servicios_nav)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
                     <option value='guardia-1'  <?php selected("servicios-guardia-1");  ?>>Guardia turno 1</option>
                     <option value="guardia-2"  <?php selected("servicios-guardia-2");  ?>>Guardia turno 2</option>
                     <option value="supervisor" <?php selected("servicios-supervisor"); ?>>Supervisor</option>
                </select>
            <?php 
        }

        if (isset($reportes_nav)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
                     <option value='normales'>--</option>
                </select>
            <?php 
        }

        if (isset($cambioVar)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
                     <option>--</option>
                     <option <?php echo "value='User-$varUser'" ?>  value='User'>Regresar a opciones de edición</option>
                </select>
            <?php 
        }
    
?>