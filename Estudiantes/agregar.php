<?php

	$Carpeta = "Estudiantes";
	$Accion  = "Agregar";

  	require_once "../Config/Sesion.php";

  	switch ($_SESSION['niv_acs_usr']) { // Verifico el Nivel de Acceso del usuario y le asigno una plantilla
	   case 'ROOT':    			require_once "../template/root.php";			break;
	   case 'DIRECTOR':    		require_once "../template/director.php";		break;
	   case 'ADMINISTRATIVO':  	require_once "../template/administrativo.php";	break;
	   case 'PROFESOR':        	require_once "../template/profesor.php";		break;
	   case 'REPRESENTANTE':   	require_once "../template/representante.php";	break;
  
  	}

?>
	<div class="view">
		<div>
			<p class="title">Inscripción Estudiantil</p>
		</div>
		<div class="perfil">
			<form action="" method="POST">
				<div class="avatar">
					<img src="">
					<div><input type="file" title="Foto Estudiante" name="foto_est"></div>
				</div>
				<div class="avatar">
					<img src="">
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
						<td><input type="text" name="cedula_est" placeholder="12345678" required></td>
					</tr>
					<tr>
						<td>Matrícula: </td>
						<td><input type="text" name="matricula_est" required></td>
					</tr>
					<tr>
						<td>Primer Apellido: </td>
						<td><input type="text" name="apellido1_est" placeholder="PÉREZ" required></td>
					</tr>
					<tr>
						<td>Segundo Apellido: </td>
						<td><input type="text" name="apellido2_est" placeholder="QUINTERO" required></td>
					</tr>
						<tr>
						<td>Primer Nombre: </td>
						<td><input type="text" name="nombre1_est" placeholder="PEDRO" required></td>
					</tr>
					<tr>
						<td>Segundo Nombre: </td>
						<td><input type="text" name="nombre2_est" placeholder="JOSÉ" required></td>
					</tr>
					<tr>
						<td>Grado: </td>
						<td>
							<select name="desc_grado">
								<option value="1">1°</option>
								<option value="2">2°</option>
								<option value="2">3°</option>	
							</select>
						</td>
					</tr>
					<tr>
						<td>Nivel Académico: </td>
						<td>
							<select name="mencion">
								<option value="P">Primaria</option>
								<option value="S">Secundaria</option>
								<option value="D">Diversificado</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mención: </td>
						<td>
							<select name="mencion">
								<option value="Electrónica">Electrónica</option>
								<option value="Electricidad">Electricidad</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Máquinas/Herramientas">Máquinas/Herramientas</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Sexo: </td>
						<td>
							<select name="sexo_est">
								<option value="M">M</option>
								<option value="F">F</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Fecha Nacimiento: </td>
						<td><input type="date" name="fec_nac" placeholder="31-12-2000" required></td>
					</tr>
					<tr>
						<td>Dirección: </td>
						<td><input type="text" name="direccion_est" required></td>
					</tr>
					<tr>
						<td>Peso (Kg): </td>
						<td><input type="" name="peso_est" placeholder="65" required></td>
					</tr>
					<tr>
						<td>Estatura (Mts): </td>
						<td><input type="" name="estatura_est" placeholder="1,75" required></td>
						</tr>
					<tr>
						<td>Camisa: </td>
						<td><input type="text" name="camisa_est" placeholder="S" required></td>
					</tr>
					<tr>
						<td>Pantalon: </td>
						<td><input type="text" name="pantalon_est" placeholder="28" required></td>
					</tr>
					<tr>
						<td>Zapato: </td>
							<td><input type="text" name="zapato_est" placeholder="38" required></td>
					</tr>
					<tr>
						<td>Fecha Inscripción: </td>
						<td><input type="date" name="fec_insc_est" placeholder="31-12-2000" required></td>
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
						<td><input type="text" name="cedula_rep" placeholder="12345678" required></td>
					</tr>
					<tr>
						<td>Apellido: </td>
						<td><input type="text" name="apellido_rep" placeholder="PÉREZ" required></td>
					</tr>
					<tr>
						<td>Nombre: </td>
						<td><input type="text" name="nombre_rep" placeholder="PEDRO" required></td>
					</tr>
					<tr>
						<td>Sexo: </td>
						<td>
							<select name="sexo_rep">
								<option value="M">M</option>
								<option value="F">F</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Teléfono: </td>
						<td><input type="text" name="telef_rep" placeholder="04161234567"></td>
					</tr>
					<tr>
						<td>Telefono Emergencia: </td>
						<td><input type="text" name="telef_emerg_rep" placeholder="04161234567" required></td>
					</tr>
				</table>
				<input type="submit" name="" value="Inscribir">
			</form>
		</div>
	</div>