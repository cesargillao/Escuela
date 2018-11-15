<?php
	


?>
<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php echo RAZON ?></title>
		<script src="<?php echo URL ?>template/js/jquery.js"></script>
		<link rel="stylesheet" href="<?php echo URL ?>template/css/CGL-UI.css">
	</head>
	<body>
		<nav>
			<li><a href="<?php echo URL ?>"><?php echo RAZON; ?></a></li>
			<li><a href="">Estudiantes</a>
				<ul>
					<li><a href="<?php echo URL ?>Estudiantes">Listado</a></li>
					<li><a href="<?php echo URL ?>Estudiantes/Boletin">Boletín</a></li>
					<li><a href="<?php echo URL ?>Estudiantes/Calificaciones">Calificaciones</a></li>
					<li><a href="<?php echo URL ?>Estudiantes/Inasistencias">Inasistencias</a></li>
					<li><a href="<?php echo URL ?>Estudiantes/Retardos">Retardos</a></li>
					<li><a href="<?php echo URL ?>Estudiantes/Horario">Horario</a></li>
					<li><a href="<?php echo URL ?>Estudiantes/Planificacion">Planificación</a></li>
					<li><a href="<?php echo URL ?>Estudiantes/Grados">Grados</a></li>
				</ul>
			</li>
			<li class="right"><a href="<?php echo URL ?>Logout.php"><span class="icon-switch"></span></a></li>
			<li class="right"><a href="<?php echo URL ?>Configuracion.php"><span class="icon-cog"></span></a></li>
			<li class="right"><a href="<?php echo URL ?>Mensajes"><span class="icon-bubbles"></span></a></li>
		</nav>
	</body>
	</html>