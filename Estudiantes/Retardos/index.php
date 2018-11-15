<?php

	$Carpeta = "Retardos";
	$Accion  = "Index";

  	require_once "../Config/Sesion.php";

	$conex = new Conexion;

	switch ($_SESSION['niv_acs_usr']) { // Verifico el Nivel de Acceso del usuario y le asigno una plantilla
		case 'ROOT':    		require_once "../template/root.php";			break;
		case 'DIRECTOR':    	require_once "../template/director.php";		break;
		case 'ADMINISTRATIVO':  require_once "../template/administrativo.php";	break;
		case 'PROFESOR':        require_once "../template/profesor.php";		break;
		case 'REPRESENTANTE':   require_once "../template/representante.php";	break;
	}

	switch ($_SESSION['niv_acs_usr']) {
		case 'ROOT':
				$sql = "SELECT a.cedula_est, a.nombre1_est, a.nombre2_est, a.apellido1_est, a.apellido2_est, b.id_grado as grado, b.desc_seccion as seccion
						FROM estudiantes a, grados_secciones b
						WHERE a.id_grado = b.id_grado
						AND a.id_seccion = b.id_seccion";
				$datos = $conex->consultaRetorno($sql);
		break;
		case 'DIRECTOR':
				$sql = "SELECT * FROM estudiantes ORDER BY cedula_est";
				$datos = $conex->consultaRetorno($sql);
		break;
		case 'ADMINISTRATIVO':
				$sql = "SELECT * FROM estudiantes ORDER BY cedula_est";
				$datos = $conex->consultaRetorno($sql);
		break;
		case 'PROFESOR':
				$sql = "SELECT * FROM estudiantes a, profesor b WHERE  ORDER BY cedula_est";
				$datos = $conex->consultaRetorno($sql);
		break;
		case 'REPRESENTANTE':
				$sql = "SELECT * FROM estudiantes ORDER BY cedula_est";
				$datos = $conex->consultaRetorno($sql);
		break;
	}

?>
<div class="box-principal">
	<div class="panel panel-success">
	  	<div class="panel-heading">
		    <h3 class="panel-title">Retardos</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Grado</th>
						<th>Sección</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while($row = mysqli_fetch_array($datos)){ ?>
						<tr>
							<td><?php echo $row['cedula_est'] ?></td>
							<td><?php echo $row['nombre1_est'] ?></td>
							<td><?php echo $row['apellido1_est'] ?></td>
							<td><?php echo $row['grado'] ?>&deg;</td>
							<td><?php echo $row['seccion'] ?></td>
							<td><a class="btn btn-warning" href="<?php echo URL; ?>Estudiantes/Editar.php?<?php echo $row['cedula_est'] ?>">Editar</a></td>
						</tr>
				<?php } ?>
				</tbody>
			</table> 
		</div>
	</div>
</div>