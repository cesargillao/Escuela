<?php

	$Carpeta = "Estudiantes";
	$Accion  = "Index";

	require_once "../Config/Sesion.php";

	$conex = new Conexion;
	$codg_usr = $_SESSION['codg_usr'];

	switch ($_SESSION['niv_acs_usr']) {

		case 'ROOT':
				$sql = "SELECT a.cedula_est, a.nombre1_est, a.nombre2_est, a.apellido1_est, a.apellido2_est, b.abrev_grado as grado, b.desc_seccion as seccion
						FROM estudiantes a, grados_secciones b
						WHERE a.id_grado = b.abrev_grado
						AND a.id_seccion = b.id_seccion";
				$datos = $conex->ion->query($sql);
		break;

		case 'DIRECTOR':
				
		break;

		case 'ADMINISTRATIVO':
				
		break;

		case 'PROFESOR':
				// Busco las materias que da
				$sql = "SELECT * FROM materias WHERE cedula_prof = '$codg_usr'";
				$materias = $conex->ion->query($sql);

				$sql = "SELECT d.cedula_est, d.nombre1_est, d.nombre2_est, d.apellido1_est, d.apellido2_est, c.abrev_grado as grado, c.desc_seccion as seccion
						FROM profesores a, materias b, grados_secciones c, estudiantes d
						WHERE a.cedula_prof = '$codg_usr'
						AND a.cedula_prof = b.cedula_prof
						AND b.id_grado = c.id_grado
						AND b.id_seccion = c.id_seccion
						AND c.id_grado = d.id_grado
						AND c.id_seccion = d.id_seccion";
				$estudiantes = $conex->ion->query($sql);
		break;

		case 'REPRESENTANTE':
				
		break;
	}

	switch ($_SESSION['niv_acs_usr']) { // Verifico el Nivel de Acceso del usuario y le asigno una plantilla
		case 'ROOT':    		require_once "../template/root.php";			break;
		case 'DIRECTOR':    	require_once "../template/director.php";		break;
		case 'ADMINISTRATIVO':  require_once "../template/administrativo.php";	break;
		case 'PROFESOR':        require_once "../template/profesor.php";		break;
		case 'REPRESENTANTE':   require_once "../template/representante.php";	break;
	}

?>
	<div class="panel">
	  	<div><p class="panel-title">Listado de estudiantes (<?php echo mysqli_num_rows($estudiantes) ?>)</p></div>
		<table>
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
			<?php while($est = mysqli_fetch_array($estudiantes)){ ?>
					<tr>
						<td><a href="<?php echo URL; ?>Estudiantes/Editar.php?id=<?php echo $est['cedula_est'] ?>"><?php echo number_format($est['cedula_est'],0,",",".") ?></a></td>
						<td><?php echo utf8_encode($est['nombre1_est']) ?></td>
						<td><?php echo utf8_encode($est['apellido1_est']) ?></td>
						<td><?php echo utf8_encode($est['grado']) ?>&deg;</td>
						<td><?php echo utf8_encode($est['seccion']) ?></td>
					</tr>
			<?php } ?>
			</tbody>
		</table> 
	</div>