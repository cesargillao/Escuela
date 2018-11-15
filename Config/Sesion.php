<?php

	session_start();
	$user = $_SESSION['login_usr'];
				
	if(isset($user)){
		require_once "Conexion.php";
		require_once "Permisologia.php";
	} else {
		header('Location: '.URL.'login.php');
	}
	
?>