<?php

	$Carpeta = "Estudiantes";
	$Accion  = "Ver";

	require_once "../Config/Sesion.php";

	switch ($_SESSION['niv_acs_usr']) { // Verifico el Nivel de Acceso del usuario y le asigno una plantilla
		case 'ROOT':       		require_once "../template/root.php";			break;
		case 'DIRECTOR':     	require_once "../template/director.php";		break;
		case 'ADMINISTRATIVO':  require_once "../template/administrativo.php";	break;
		case 'PROFESOR':        require_once "../template/profesor.php";		break;
		case 'REPRESENTANTE':   require_once "../template/representante.php";	break;
	}

	$cedula_est = $_GET['id'];
	$conex = new Conexion;
	$sql = "SELECT a.*, b.abrev_grado as grado, b.desc_seccion as seccion
			FROM estudiantes a, grados_secciones b
			WHERE cedula_est = '$cedula_est'
			AND a.id_grado = b.id_grado
			AND a.id_seccion = b.id_seccion";
	$estudiantes = $conex->ion->query($sql);
	$est = mysqli_fetch_array($estudiantes);

	$dia_nac = date("d", strtotime($est['fec_nac_est']));
	$mes_nac = date("m", strtotime($est['fec_nac_est']));
	$ano_nac = date("Y", strtotime($est['fec_nac_est']));

	$dia_ins = date("d", strtotime($est['fec_insc_est']));
	$mes_ins = date("m", strtotime($est['fec_insc_est']));
	$ano_ins = date("Y", strtotime($est['fec_insc_est']));

	$sql = "SELECT descripcion FROM descripciones WHERE grupo = 'Meses' AND id_desc = '$mes_nac'";
	$meses = $conex->ion->query($sql);
	$mes_2 = mysqli_fetch_array($meses);

	$fec_ins = $dia_ins."-".$mes_ins."-".$ano_ins;
	$fec_nac = $dia_nac."-".$mes_nac."-".$ano_nac;
	//$fec_nac_2  = $dia_nac." de ".$mes_2['descripcion']." de ".$ano_nac." (".$fec_nac.")";


?>
	<div class="view">
		<div>
			<p class="title">Perfil de <?php echo ucwords(strtolower($est['nombre1_est']." ".$est['apellido1_est'])) ?></p>
		</div>
		<div class="perfil">
				<div class="avatar">
					<img src="<?php echo URL ?>template/img/avatars/<?php echo $est['foto_est'] ?>">
				</div>
				<div class="avatar">
					<img src="<?php echo URL ?>template/img/avatars/<?php echo $est['foto_est'] ?>">
				</div>
				<table class="informacion">
					<tr>
						<td>Cédula: </td>
						<td><?php echo $est['nacionalidad_est']." ".number_format($est['cedula_est'],0,",",".") ?></td>
					</tr>
					<tr>
						<td>Matrícula: </td>
						<td><?php echo $est['matricula_est'] ?></td>
					</tr>
					<tr>
						<td>Apellidos: </td>
						<td><?php echo $est['apellido1_est']." ".$est['apellido2_est'] ?></td>
					</tr>
					<tr>
						<td>Nombre: </td>
						<td><?php echo $est['nombre1_est']." ".$est['nombre2_est'] ?></td>
					</tr>
					<tr>
						<td>Grado: </td>
						<td><?php echo $est['grado'] ?>°</td>
					</tr>
					<tr>
						<td>Sección: </td>
						<td><?php echo $est['seccion'] ?></td>
					</tr>
					<tr>
						<td>Sexo: </td>
						<td><?php echo $est['sexo_est'] ?></td>
					</tr>
					<tr>
						<td>Fecha Nacimiento: </td>
						<td><?php echo $fec_nac ?></td>
					</tr>
					<tr>
						<td>Dirección: </td>
						<td><?php echo utf8_encode($est['direccion_est']) ?></td>
					</tr>
					<tr>
						<td>Peso: </td>
						<td><?php echo $est['peso_est'] ?> Kg.</td>
					</tr>
					<tr>
						<td>Estatura: </td>
						<td><?php echo $est['estatura_est'] ?> Mts.</td>
					</tr>
					<tr>
						<td>Camisa: </td>
						<td><?php echo $est['camisa_est'] ?></td>
					</tr>
					<tr>
						<td>Pantalon: </td>
						<td><?php echo $est['pantalon_est'] ?></td>
					</tr>
					<tr>
						<td>Zapato: </td>
						<td><?php echo $est['zapato_est'] ?></td>
					</tr>
					<tr>
						<td>Fecha Inscripción: </td>
						<td><?php echo $fec_ins ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" class="separador">Representante</td>
					</tr>
					<tr>
						<td>Cédula: </td>
						<td><?php echo $est['nacionalidad_rep']." ".number_format($est['cedula_rep'],0,",",".") ?></td>
					</tr>
					<tr>
						<td>Apellido: </td>
						<td><?php echo $est['apellido_rep'] ?></td>
					</tr>
					<tr>
						<td>Nombre: </td>
						<td><?php echo $est['nombre_rep'] ?></td>
					</tr>
					<tr>
						<td>Sexo: </td>
						<td><?php echo $est['sexo_rep'] ?></td>
					</tr>
					<tr>
						<td>Teléfono: </td>
						<td><?php echo $est['telef_rep'] ?></td>
					</tr>
					<tr>
						<td>Telefono Emergencia: </td>
						<td><?php echo $est['telef_emerg_rep'] ?></td>
					</tr>
				</table>
				<div class="editar"><a href="<?php echo URL."estudiantes/editar.php?id=".$cedula_est ?>">Editar</a></div>
				<div class="eliminar"><a href="<?php echo URL."Estudiantes/eliminar.php?id=".$cedula_est ?>">Eliminar</a></div>
		</div>
	</div>
<?php



?>