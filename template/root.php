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
		<li><a href="#" class="left">Estudiantes</a>
			<ul class="Menu">
				<li><a href="#">Listado</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="<?php echo URL ?>Estudiantes/Boletin">Boletín</a></li>
				<li><a href="#">Calificaciones</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Inasistencias</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Retardos</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Retardos">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Retardos/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Retardos/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Retardos/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Horario</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Horario">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Horario/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Horario/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Horario/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Planificación</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Grados</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Grados">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Grados/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Grados/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Grados/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="left"><a href="">Profesores</a>
			<ul class="Menu">
				<li><a href="#">Listado</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="<?php echo URL ?>Estudiantes/Boletin">Boletín</a></li>
				<li><a href="#">Calificaciones</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Calificaciones/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Inasistencias</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Inasistencias/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Retardos</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Retardos">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Retardos/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Retardos/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Retardos/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Horario</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Horario">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Horario/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Horario/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Horario/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Planificación</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Planificacion/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
				<li><a href="#">Grados</a>
					<ul class="SubMenu">
						<li><a href="<?php echo URL ?>Estudiantes/Grados">Consultar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Grados/Agregar.php">Agregar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Grados/Editar.php">Editar</a></li>
						<li><a href="<?php echo URL ?>Estudiantes/Grados/Eliminar.php">Eliminar</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="right"><a href="<?php echo URL ?>Logout.php"><span class="icon-switch"></span></a></li>
		<li class="right"><a href="<?php echo URL ?>Configuracion.php"><span class="icon-cog"></span></a></li>
		<li class="right"><a href="<?php echo URL ?>Mensajes"><span class="icon-bubbles"></span></a></li>
	</nav>
<?php if (isset($materias)) { ?>	
	<aside>
		<div><span></span> Materias</div>
		<ul>
		<?php
			while ($mat = mysqli_fetch_array($materias)) {
			echo "<li><a href=''>".$mat['desc_mat']."</a></li>";
			}
		?>
		</ul>
		<div><span></span> Grados</div>
		<ul>
			<li><a href=""></a></li>
		</ul>
	</aside>
<?php } ?>