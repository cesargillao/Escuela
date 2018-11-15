<?php

	if ( isset($Carpeta) AND isset($Accion) ) {

		$Tabla = substr($Carpeta, 0, 3)."_".substr($Accion, 0, 3);
		$niv_acs_usr = $_SESSION['niv_acs_usr'];
		$sql = "SELECT $Tabla FROM permisologia WHERE niv_acs_usr = '$niv_acs_usr'";
		$conex = new Conexion;
		$datos = $conex->ion->query($sql);
		$datos = mysqli_fetch_array($datos);
		if ( $datos[$Tabla] == 'NO') {
			header('Location: '.URL);
		}
	}
	
?>