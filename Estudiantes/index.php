<?php

	$Carpeta = "Estudiantes";
	$Accion  = "Index";

	require_once "../Config/Sesion.php";
	require_once "../template/profesor.php";
	
	class index{
		
		private $codg_usr;
		private $id_mat;

		function aside($codg_usr){
			$this->codg_usr = $codg_usr;
			// Busco las materias que da
			$conex = new Conexion;
			$sql = "SELECT a.id_mat, a.desc_mat, b.abrev_grado as grado, b.desc_seccion as seccion
					FROM materias a, grados_secciones b
					WHERE a.cedula_prof = '{$this->codg_usr}'
					AND a.id_grado = b.id_grado
					AND a.id_seccion = b.id_seccion
					AND a.nivel = b.nivel
					ORDER BY desc_mat";
			$materias = $conex->ion->query($sql);
?>
			<aside>
				<div  class="title"><span></span> Materias</div>
				<ul>
				<?php
					while ($mat = mysqli_fetch_array($materias)) {
					echo "<li><a href='".URL."Estudiantes/index.php?mat=".$mat['id_mat']."'>".utf8_encode($mat['desc_mat'])." (".$mat['grado']."&deg;".$mat['seccion'].")</a></li>";
					}
				?>
				</ul>
				<br>
			</aside>
<?php
		}
		function listado($codg_usr, $id_mat){
			$this->codg_usr = $codg_usr;
			$this->id_mat = $id_mat;
			$conex = new Conexion;
			$sql = "SELECT c.cedula_est, c.nombre1_est, c.apellido1_est
					FROM profesores a, materias b, estudiantes c
					WHERE a.cedula_prof = '{$this->codg_usr}'
					AND a.cedula_prof = b.cedula_prof
					AND b.id_mat = '{$this->id_mat}'
					AND b.id_grado = c.id_grado
					AND b.id_seccion = c.id_seccion";
			$estudiantes = $conex->ion->query($sql);
			$sql = "SELECT a.desc_mat, b.abrev_grado as grado, b.desc_seccion as seccion
					FROM materias a, grados_secciones b
					WHERE a.cedula_prof = '{$this->codg_usr}'
					AND a.id_mat = '{$this->id_mat}'
					AND a.id_grado = b.id_grado
					AND a.id_seccion = b.id_seccion";
			$materias = $conex->ion->query($sql);
			$mat = mysqli_fetch_array($materias);

?>
			<div class="list">
			  	<div><p class="title"><?php echo mysqli_num_rows($estudiantes) ?> Estudiantes - <?php echo utf8_encode(ucwords(strtolower($mat['desc_mat'])))." ".$mat['grado']."&deg;".$mat['seccion'] ?></p></div>
				<table>
					<thead>
						<tr>
							<th>Cédula</th>
							<th>Nombre</th>
							<th>Apellido</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($est = mysqli_fetch_array($estudiantes)){ ?>
							<tr>
								<td width="33.3%"><a href="<?php echo URL; ?>Estudiantes/Ver.php?id=<?php echo $est['cedula_est'] ?>"><?php echo number_format($est['cedula_est'],0,",",".") ?></a></td>
								<td width="33.3%"><?php echo utf8_encode($est['nombre1_est']) ?></td>
								<td width="33.3%"><?php echo utf8_encode($est['apellido1_est']) ?></td>
							</tr>
					<?php } ?>
					</tbody>
				</table> 
			</div>
<?php 	}
	}

	$conex = new Conexion;
	@$id_mat = $_GET['mat'];
	$codg_usr = $_SESSION['codg_usr'];
	$index = new index;
	$index->aside($codg_usr);
	if (isset($id_mat)) {
		$index->listado($codg_usr, $id_mat);
	}

?>