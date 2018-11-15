<?php
	


?>
<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php echo RAZON ?></title>
		<script src="<?php echo URL ?>template/js/jquery.js"></script>
		<script src="<?php echo URL ?>template/js/bootstrap.js"></script>
		<link rel="stylesheet" href="<?php echo URL ?>template/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL ?>template/css/general.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
			   	<div class="navbar-header">
				   	<a class="navbar-brand" href="#"><?php echo RAZON ?></a>
			   	</div>
			   	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				    <ul class="nav navbar-nav">
						<li class="dropdown">
				        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes <span class="caret"></span></a>
				          	<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo URL ?>Estudiantes">Listado</a></li>
								<li><a href="<?php echo URL ?>Estudiantes/Boletin">Boletín</a></li>
								<li><a href="<?php echo URL ?>Estudiantes/Evaluaciones">Evaluaciones</a></li>
								<li><a href="<?php echo URL ?>Estudiantes/Inasistencias">Inasistencias</a></li>
								<li><a href="<?php echo URL ?>Estudiantes/Retardos">Retardos</a></li>
								<li><a href="<?php echo URL ?>Estudiantes/Horario">Horario</a></li>
								<li><a href="<?php echo URL ?>Estudiantes/Planificacion">Planificación</a></li>
								<li><a href="<?php echo URL ?>Estudiantes/Grados">Grados</a></li>
					        </ul>
				        </li>
				        <li class="dropdown">
				        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profesores <span class="caret"></span></a>
				          	<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo URL ?>Profesores">Listado</a></li>
								<li><a href="<?php echo URL ?>Profesores/Evaluaciones">Evaluaciones</a></li>
								<li><a href="<?php echo URL ?>Profesores/Inasistencias">Inasistencias</a></li>
								<li><a href="<?php echo URL ?>Profesores/Retardos">Retardos</a></li>
								<li><a href="<?php echo URL ?>Profesores/Horario">Horario</a></li>
								<li><a href="<?php echo URL ?>Profesores/Planificacion">Planificación</a></li>
								<li><a href="<?php echo URL ?>Profesores/Grados">Grados</a></li>
					        </ul>
				        </li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo URL ?>Mensajes">Mensajes</a></li>
						<li><a href="<?php echo URL ?>logout.php"><span class="icon icon-off"></span></a></li>
					</ul>
			    </div>
		  	</div>
		</nav>
	</body>
	</html>