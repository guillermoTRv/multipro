<?php 
   
  $popover     = "rel='popover' data-container='body' data-toggle='popover' data-placement='top'";



   if ($type_user=='administrador') {
   		 $tipo_usuario_encabezado   = $type_user;
   		 $dato_izquierdo            = $cliente; 
   

       switch ($nav) {
         case 'personal-guardias':     $name_area = "Personal guardias"; break;
         case 'personal-supervisores': $name_area = "Personal Supervisores"; break;
         case 'personal-clientes':     $name_area = "Usuarios Clientes"; break;

         case 'personal_crear':        $name_area = "Alta de personal"; break;
         
         case 'personal_bajas':        $name_area = "Baja de personal"; break;
         
         case 'inmuebles_listado':     $name_area = "Inmuebles"; break;
         case 'inmuebles-norte':       $name_area = "Zona norte"; break;
         case 'inmuebles-centro':      $name_area = "Zona centro"; break;

         case 'inmuebles-sur':         $name_area = "Zona sur"; break;
         case 'inmuebles_crear':       $name_area = "Alta de inmueble"; break;
         case 'inmuebles_bajas':       $name_area = "Baja de inmueble"; break;
         case 'check-interno':         $name_area = "Check interno"; break;

         case 'check-externo':         $name_area = "Check externo"; break;
         
         case 'servicios':             $name_area = "Costos servicios"; break;
         
         case 'reportes-normales':        $name_area = "Reportes normales"; break;
         case 'reportes-extraordinarios': $name_area = "Reportes extraordinarios"; break;
         #case '': $name_area = ""; break;
           
       }

       if (isset($user_nav)) {
         $name_area = "Editar información";
       }


   }
   



   function nombresConsulta($enlace,$id_personal){
       
       $consultaNombresConsulta = "SELECT nombre_g,apellido_p,apellido_m FROM usuarios_datos_basicos WHERE id_usuario = '$id_personal'";
       $consultaNombresEjecutar = mysqli_query($enlace,$consultaNombresConsulta);
       $consultaNombresArray    = mysqli_fetch_array($consultaNombresEjecutar);
       
       $nombre_g      =    $consultaNombresArray['nombre_g'];
       $apellido_p    =    $consultaNombresArray['apellido_p'];
       $apellido_m    =    $consultaNombresArray['apellido_m'];

       global $name_area;
       $name_area               = $nombre_g."&nbsp;".$apellido_p."&nbsp;".$apellido_m; 

   }


   if ($type_user=='supervisor') {
   		 $tipo_usuario_encabezado = $type_user;
   		 $dato_izquierdo          = "";
   		 nombresConsulta($enlace,$id_personal);
       
   }
   if ($type_user=='guardia') {
       
      $busquedaInmuebleUser = "SELECT inmueble_asign FROM usuarios_datos_basicos WHERE id_usuario = '$id_personal'"; 
      $busquedaInmuebleUser = mysqli_query($enlace,$busquedaInmuebleUser);
      $busquedaInmuebleUser = mysqli_fetch_array($busquedaInmuebleUser);
      $inmueble_asignUser   = $busquedaInmuebleUser['inmueble_asign'];


       $tipo_usuario_encabezado = $type_user;
       $dato_izquierdo          = $inmueble_asignUser;
       $name_area               = $name_user; 
       nombresConsulta($enlace,$id_personal);

   }
   if ($type_user == 'cliente') {
       $tipo_usuario_encabezado = $type_user;
       $dato_izquierdo          = "";

       $clienteName      =  "SELECT nombre_g,apellido_p,apellido_m FROM clientes_usuarios WHERE id_clienteuser='$id_personal'";
       $clienteName      =  mysqli_query($enlace,$clienteName) or die("error");
       $clienteNameArray =  mysqli_fetch_array($clienteName);

       $nombre_g    = $clienteNameArray['nombre_g'];
       $apellido_p  = $clienteNameArray['apellido_p'];
       $apellido_m  = $clienteNameArray['apellido_m'];

       $name_area   = $nombre_g."&nbsp;".$apellido_p."&nbsp;".$apellido_m;
   }
  
?>