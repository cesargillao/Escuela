<?php
	
	require_once "Config/Sesion.php";

	if ($_SESSION['niv_acs_usr'] == "ROOT") {
		require_once "template/root.php";
	}
	if ($_SESSION['niv_acs_usr'] == "DIRECTOR") {
		require_once "template/Director.php";
	}
	if ($_SESSION['niv_acs_usr'] == "ADMINISTRATIVO") {
		require_once "template/Administrativo.php";
	}
	if ($_SESSION['niv_acs_usr'] == "PROFESOR") {
		require_once "template/Profesor.php";
	}
	if ($_SESSION['niv_acs_usr'] == "REPRESENTANTE") {
		require_once "template/Representante.php";
	}

?>