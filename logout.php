<?php
	session_start();
	require_once "Config/Conexion.php";

	$login_usr = $_SESSION['login_usr'];
	$codg_usr = $_SESSION['codg_usr'];

	$conex = new Conexion;
	$sql = "UPDATE usuarios SET activo_usr = 'NO' WHERE login_usr = '$login_usr' AND codg_usr = '$codg_usr'";
	$conex->ion->query($sql);
	
	session_destroy();
	header('Location: login.php');

?>