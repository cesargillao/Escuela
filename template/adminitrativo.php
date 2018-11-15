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
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		      </button>
		      <a class="navbar-brand" href="#"><?php echo RAZON ?></a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes 
		        		<span class="caret"></span>
		        	</a>
		        	<ul class="dropdown-menu" role="menu">
			            <li><a href="<?php echo URL ?>Estudiantes">Listado</a></li>
			            <li><a href="<?php echo URL ?>Estudiantes/Agregar.php">Agregar</a></li>
			        </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Calificaciones 
		        		<span class="caret"></span>
		        	</a>
		          	<ul class="dropdown-menu" role="menu">
			            <li><a href="<?php echo URL ?>Calificaciones/Boletin.php">Lapso</a></li>
			            <li><a href="<?php echo URL ?>Calificaciones/Evaluaciones.php">Evaluaciones</a></li>
			          </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Planificacion 
		        		<span class="caret"></span>
		        	</a>
		          	<ul class="dropdown-menu" role="menu">
			            <li><a href="<?php echo URL ?>Planificacion/Plan_Evaluacion.php">Plan Evaluacion</a></li>
			            <li><a href="<?php echo URL ?>Planificacion/Horario.php">Horario</a></li>
			          </ul>
		        </li>
		        <li><a href="<?php echo URL ?>">Inasistencias</a></li>
		        <li><a href="<?php echo URL ?>">Mensajes</a></li>
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
		        <!--<li><input type="text" name="buscar"><span class=".icon-search"><input type="submit" name="enviar"></span></li>-->
		      </ul>
		    </div>
		  </div>
		</nav>
	</body>
	</html>