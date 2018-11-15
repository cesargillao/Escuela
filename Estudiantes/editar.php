<?php

	$Carpeta = "Estudiantes";
	$Accion  = "Editar";

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
	$sql = "SELECT a.*, b.id, b.abrev_grado as grado, b.desc_seccion as seccion
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

	$fec_ins = $dia_ins."-".$mes_ins."-".$ano_ins;
	$fec_nac = $dia_nac."-".$mes_nac."-".$ano_nac;
	
	$sql = "";


?>
	<div class="view">
		<div>
			<p class="title">Perfil de <?php echo ucwords(strtolower($est['nombre1_est']." ".$est['apellido1_est'])) ?></p>
		</div>
		<div class="perfil">
			<form action="" method="POST">
				<div class="avatar">
					<img src="<?php echo URL ?>template/img/avatars/<?php echo $est['foto_est'] ?>">
					<div><input type="file" title="Foto Estudiante" name="foto_est"></div>
				</div>
				<div class="avatar">
					<img src="<?php echo URL ?>template/img/avatars/<?php echo $est['foto_rep'] ?>">
					<div><input type="file" title="Foto Representante" name="foto_rep"></div>
				</div>
				<table class="informacion">
					<tr>
						<td>Nacionalidad: </td>
						<td>
							<select name="nacionalidad_est">
								<option value="V">V</option>
								<option value="E">E</option>
							</select>
						</td>
						</tr>
					<tr>
						<td>Cédula: </td>
						<td><input type="text" name="cedula_est" value="<?php echo $est['cedula_est'] ?>" placeholder="12345678" required></td>
					</tr>
					<tr>
						<td>Matrícula: </td>
						<td><input type="text" name="matricula_est" value="<?php echo $est['matricula_est'] ?>" required></td>
					</tr>
					<tr>
						<td>Primer Apellido: </td>
						<td><input type="text" name="apellido1_est" value="<?php echo $est['apellido1_est'] ?>" placeholder="PÉREZ" required></td>
					</tr>
					<tr>
						<td>Segundo Apellido: </td>
						<td><input type="text" name="apellido2_est" value="<?php echo $est['apellido2_est'] ?>" placeholder="QUINTERO" required></td>
					</tr>
						<tr>
						<td>Primer Nombre: </td>
						<td><input type="text" name="nombre1_est" value="<?php echo $est['nombre1_est'] ?>" placeholder="PEDRO" required></td>
					</tr>
					<tr>
						<td>Segundo Nombre: </td>
						<td><input type="text" name="nombre2_est" value="<?php echo $est['nombre2_est'] ?>" placeholder="JOSÉ" required></td>
					</tr>
					<tr>
						<td>Grado Sección: </td>
						<td>
							<select name="grado_seccion">
								<option value="<?php echo $est['id'] ?>" selected><?php echo $est['grado']."° ".$est['seccion'] ?></option>
								<option value="B">4° B</option>
								<option value="C">4° C</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Sexo: </td>
						<td>
							<select name="sexo_est">
								<option value="<?php echo $est['sexo_est'] ?>" selected><?php echo $est['sexo_est'] ?></option>
								<option value="F">F</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Fecha Nacimiento: </td>
						<td><input type="text" name="fec_nac" value="<?php echo $fec_nac ?>" placeholder="31-12-2000" required></td>
					</tr>
					<tr>
						<td>Dirección: </td>
						<td><textarea type="text" name="direccion_est" rows="2" cols="90" required><?php echo utf8_encode($est['direccion_est']) ?></textarea></td>
					</tr>
					<tr>
						<td>Peso (Kg): </td>
						<td><input type="text" name="peso_est" value="<?php echo $est['peso_est'] ?>" placeholder="65" required></td>
					</tr>
					<tr>
						<td>Estatura (Mts): </td>
						<td><input type="text" name="estatura_est" value="<?php echo $est['estatura_est'] ?>" placeholder="1,75" required></td>
						</tr>
					<tr>
						<td>Camisa: </td>
						<td><input type="text" name="camisa_est" value="<?php echo $est['camisa_est'] ?>" placeholder="S" required></td>
					</tr>
					<tr>
						<td>Pantalon: </td>
						<td><input type="text" name="pantalon_est" value="<?php echo $est['pantalon_est'] ?>" placeholder="28" required></td>
					</tr>
					<tr>
						<td>Zapato: </td>
							<td><input type="text" name="zapato_est" value="<?php echo $est['zapato_est'] ?>" placeholder="38" required></td>
					</tr>
					<tr>
						<td>Fecha Inscripción: </td>
						<td><input type="text" name="fec_insc_est" value="<?php echo $fec_ins ?>" placeholder="31-12-2000" required></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" class="separador">Representante</td>
					</tr>
					<tr>
						<td>Nacionalidad: </td>
						<td>
							<select name="nacionalidad_rep">
								<option value="V">V</option>
								<option value="E">E</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Cédula: </td>
						<td><input type="text" name="cedula_rep" value="<?php echo $est['cedula_rep'] ?>" placeholder="12345678" required></td>
					</tr>
					<tr>
						<td>Apellido: </td>
						<td><input type="text" name="apellido_rep" value="<?php echo $est['apellido_rep'] ?>" placeholder="PÉREZ" required></td>
					</tr>
					<tr>
						<td>Nombre: </td>
						<td><input type="text" name="nombre_rep" value="<?php echo $est['nombre_rep'] ?>" placeholder="PEDRO" required></td>
					</tr>
					<tr>
						<td>Sexo: </td>
						<td>
							<select name="sexo_rep">
								<option value="<?php echo $est['sexo_rep'] ?>" selected><?php echo $est['sexo_rep'] ?></option>
								<option value="M">M</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Teléfono: </td>
						<td><input type="text" name="telef_rep" value="<?php echo $est['telef_rep'] ?>" placeholder="04161234567"></td>
					</tr>
					<tr>
						<td>Telefono Emergencia: </td>
						<td><input type="text" name="telef_emerg_rep" value="<?php echo $est['telef_emerg_rep'] ?>" placeholder="04161234567" required></td>
					</tr>
				</table>
				<input class="editar" type="submit" value="Editar">
				<a class="eliminar" href="<?php echo URL."Estudiantes/eliminar.php?id=".$cedula_est ?>"></a>
			</form>
		</div>
	</div>