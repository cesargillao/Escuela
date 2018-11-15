<?php

	$Carpeta = "Inasistencias";
	$Accion  = "Eliminar";

  	require_once "../Config/Sesion.php";

  	switch ($_SESSION['niv_acs_usr']) { // Verifico el Nivel de Acceso del usuario y le asigno una plantilla
	   case 'ROOT':    			require_once "../template/root.php";			break;
	   case 'DIRECTOR':    		require_once "../template/director.php";		break;
	   case 'ADMINISTRATIVO':  	require_once "../template/administrativo.php";	break;
	   case 'PROFESOR':        	require_once "../template/profesor.php";		break;
	   case 'REPRESENTANTE':   	require_once "../template/representante.php";	break;
  
  	}

?>