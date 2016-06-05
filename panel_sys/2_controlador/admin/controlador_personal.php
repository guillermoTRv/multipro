<?php 
        switch ($nav) {
          case 'personal-guardias':
              include("panel_sys/personal/admin/listar/listado_guardias.php"); 
          break;

          case 'personal-supervisores':
              include("panel_sys/personal/admin/listar/listado_supervisores.php"); 
          break;

          case 'personal-clientes':
              include("panel_sys/personal/admin/listar/listado_clientes.php"); 
          break;

          case 'personal_crear':
              include("panel_sys/personal/admin/crear_guardia/crear_usuarios.php"); 
          break;

          case 'personal_crear_cliente':
              include("panel_sys/personal/admin/crear_cliente/crear_cliente.php"); 
          break;

          case 'personal_bajas':
              include("panel_sys/personal/admin/eliminar/listadoGuardias_eliminar.php"); 
          break;                         
        } 
    
        if (isset($personal_user)) {
          include("panel_sys/personal/admin/editar/principal_editarUsuario.php");
        }

        if (isset($cambioVar)) {
          include("panel_sys/2_controlador/admin/controlador_edicionUsuario.php");
        }

        if (isset($supervisor_nav)) {
          include("panel_sys/controladores/admin/controlador_edicionSupervisor.php");
        }
?>