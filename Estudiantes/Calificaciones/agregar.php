<?php

	$Carpeta = "Calificaciones";
	$Accion  = "Agregar";

  	require_once "../../Config/Sesion.php";
	require_once "../../template/profesor.php";
	
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
					ORDER BY desc_mat";
			$materias = $conex->ion->query($sql);
?>
			<aside>
				<div  class="title"><span></span> Materias</div>
				<ul>
				<?php
					while ($mat = mysqli_fetch_array($materias)) {
					echo "<li><a href='".URL."Evaluaciones/index.php?mat=".$mat['id_mat']."'>".utf8_encode($mat['desc_mat'])." (".$mat['grado']."&deg;".$mat['seccion'].")</a></li>";
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
			$sql = "SELECT d.cedula_est, d.nombre1_est, d.apellido1_est, c.calificacion, c.porcentaje
					FROM profesores a, planificacion b, calificaciones c, estudiantes d
					WHERE a.cedula_prof = '{$this->codg_usr}'
					AND b.id_mat = '{$this->id_mat}'
					AND b.id_eval = c.id_eval
					AND c.cedula_est = d.cedula_est";
			$evaluaciones = $conex->ion->query($sql);
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
			  	<div><p class="title"><?php echo mysqli_num_rows($evaluaciones) ?> Evaluaciones - <?php echo utf8_encode($mat['desc_mat'])." ".$mat['grado']."&deg;".$mat['seccion'] ?></p></div>
				<table>
					<thead>
						<tr>
							<th>Cédula</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Calificación</th>
							<th>Porcentaje</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($est = mysqli_fetch_array($evaluaciones)){ ?>
							<tr>
								<td><a href="<?php echo URL; ?>Evaluaciones/Ver.php?id=<?php echo $est['cedula_est'] ?>"><?php echo number_format($est['cedula_est'],0,",",".") ?></a></td>
								<td><?php echo utf8_encode($est['nombre1_est']) ?></td>
								<td><?php echo utf8_encode($est['apellido1_est']) ?></td>
								<td><?php echo utf8_encode($est['calificacion']) ?></td>
								<td><?php echo utf8_encode($est['porcentaje']) ?></td>
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