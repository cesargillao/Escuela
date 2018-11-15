<?php

	$Carpeta = "Grados";
	$Accion  = "Index";

	require_once "../../Config/Sesion.php";
	require_once "../../template/profesor.php";
	
	class index{
		
		private $codg_usr;
		private $nivel;

		function aside($codg_usr, $nivel){
			$this->codg_usr = $codg_usr;
			$this->nivel = $nivel;
			// Busco las materias que da
			$conex = new Conexion;
			$sql = "SELECT a.nivel, b.descripcion
					FROM grados_secciones a, descripciones b
					WHERE b.grupo = 'Niveles'
					AND a.nivel = b.id_desc
					GROUP BY descripcion
					ORDER BY a.id_grado";
			$niveles = $conex->ion->query($sql);
?>
			<aside>
				<div  class="title">Niveles</div>
				<ul>
				<?php
					while ($niv = mysqli_fetch_array($niveles)) {
					echo "<li><a href='".URL."Estudiantes/Grados/index.php?niv=".$niv['nivel']."'>".utf8_encode($niv['descripcion'])."</a></li>";
					}
				?>
				</ul>
				<br>
			</aside>
<?php
		}
		function listado($codg_usr, $nivel){
			$this->codg_usr = $codg_usr;
			$this->nivel = $nivel;
			$conex = new Conexion;
			$sql = "SELECT a.*, b.descripcion
					FROM grados_secciones a, descripciones b
					WHERE a.nivel = '{$this->nivel}'
					AND b.grupo = 'Niveles'
					AND a.nivel = b.id_desc";
			$niveles = $conex->ion->query($sql);
			$grados_secciones = $conex->ion->query($sql);

?>
			<div class="list">
			  	<div><p class="title"><?php echo mysqli_num_rows($grados_secciones) ?> Grados</p></div>
				<table>
					<thead>
						<tr>
							<th>Grado - Sección</th>
							<th>Mención</th>
							<th>Prof. Guía</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($grados = mysqli_fetch_array($grados_secciones)){ ?>
							<tr>
								<td width="33.3%"><a href="<?php echo URL."Estudiantes/Grados/Ver.php?id=".$grados['id'] ?>"><?php echo $grados['abrev_grado'] ?>° <?php echo $grados['desc_seccion'] ?></a></td>
								<td width="33.3%"><?php echo utf8_encode($grados['mencion']) ?></td>
								<td width="33.3%"><?php echo utf8_encode($grados['cedula_prof']) ?></td>
							</tr>
					<?php } ?>
					</tbody>
				</table> 
			</div>
<?php 	}
	}

	$conex = new Conexion;
	$codg_usr = $_SESSION['codg_usr'];
	@$nivel = $_GET['niv'];
	$index = new index;
	$index->aside($codg_usr, $nivel);
	if (isset($nivel)) {
		$index->listado($codg_usr, $nivel);
	}

?>