<?php

	$Carpeta = "Grados";
	$Accion  = "Ver";

  	require_once "../../Config/Sesion.php";
  	require_once "../../template/profesor.php";
?>
	<div class="view">
		<div>
			<p class="title">Grado</p>
		</div>
		<div class="perfil">
				<table class="informacion">
					<tr>
						<td>Nivel Académico: </td>
						<td>
							<select name="">
								<option value="1">PRIMARIA</option>
								<option value="2">SECUNDARIA</option>
							</select>
						</td>
						</tr>
					<tr>
					<tr>
						<td>Grado: </td>
						<td>
							<select name="">
								<option value="1">PRIMERO</option>
								<option value="2">SEGUNDO</option>
								<option value="3">TERCERO</option>
								<option value="4">CUARTO</option>
								<option value="5">QUINTO</option>
								<option value="6">SEXTO</option>
								<option value="7">SÉPTIMO</option>
								<option value="8">OCTAVO</option>
								<option value="9">NOVENO</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Sección: </td>
						<td>
							<select name="">
								<option value="1">A</option>
								<option value="2">B</option>
								<option value="3">C</option>
								<option value="4">D</option>
								<option value="5">E</option>
								<option value="6">F</option>
								<option value="7">G</option>
								<option value="8">H</option>
								<option value="9">I</option>
								<option value="10">J</option>
								<option value="11">K</option>
								<option value="12">L</option>
								<option value="13">M</option>
								<option value="14">N</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Grado: </td>
						<td>
							<select name="">
								<option value="1">ELECTRÓNICA</option>
								<option value="2">ELECRICIDAD</option>
								<option value="3">AUTOMOTRÍZ</option>
								<option value="4">MÁQUINAS/HERRAMIENTAS</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Cédula Prof. Guía: </td>
						<td><input type="text" name="" placeholder="12345678" required></td>
					</tr>
				</table>
				<div class="editar"><a href="<?php echo URL."estudiantes/grados/editar.php?id=" ?>">Editar</a></div>
				<div class="eliminar"><a href="<?php echo URL."estudiantes/grados/eliminar.php?id=" ?>">Eliminar</a></div>
		</div>
	</div>