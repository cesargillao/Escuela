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

		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
     		</button>
     		<a class="navbar-brand" href="<?php echo URL ?>"><?php echo RAZON ?></a>

      		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
        		<ul class="navbar-nav mr-auto">
		          	<li class="nav-item dropdown">
			            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
			            <div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes">Listado</a>
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes/Boletin">Boletín</a>
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes/Calificaciones">Calificaciones</a>
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes/Inasistencias">Inasistencias</a>
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes/Retardos">Retardos</a>
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes/Horario">Horario</a>
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes/Planificacion">Planificación</a>
							<a class="dropdown-item" href="<?php echo URL ?>Estudiantes/Grados">Grados</a>
			            </div>
		          	</li>
		          	<li class="nav-item dropdown">
			            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profesores</a>
			            <div class="dropdown-menu" aria-labelledby="dropdown02">
							<a class="dropdown-item" href="<?php echo URL ?>Profesores">Listado</a>
							<a class="dropdown-item" href="<?php echo URL ?>Profesores/Calificaciones">Calificaciones</a>
							<a class="dropdown-item" href="<?php echo URL ?>Profesores/Inasistencias">Inasistencias</a>
							<a class="dropdown-item" href="<?php echo URL ?>Profesores/Retardos">Retardos</a>
							<a class="dropdown-item" href="<?php echo URL ?>Profesores/Horario">Horario</a>
							<a class="dropdown-item" href="<?php echo URL ?>Profesores/Planificacion">Planificación</a>
							<a class="dropdown-item" href="<?php echo URL ?>Profesores/Grados">Grados</a>
			            </div>
			        </li>
					<li class="nav-item"><a class="nav-link" href="<?php echo URL ?>Mensajes">Mensajes</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo URL ?>logout.php"><span class="icon icon-off"></span></a></li>
        		</ul>
        		<form class="form-inline my-2 my-md-0">
	          		<input class="form-control mr-sm-2" type="text" placeholder="Buscar">
	          		<button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>
        		</form>
      		</div>
    	</nav>
	</body>
	</html>