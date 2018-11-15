<?php

	$Carpeta = "Grados";
	$Accion  = "Index";

  	require_once "../Config/Sesion.php";

  	switch ($_SESSION['niv_acs_usr']) { // Verifico el Nivel de Acceso del usuario y le asigno una plantilla
	   case 'ROOT':    			require_once "../template/root.php";			break;
	   case 'DIRECTOR':    		require_once "../template/director.php";		break;
	   case 'ADMINISTRATIVO':  	require_once "../template/administrativo.php";	break;
	   case 'PROFESOR':        	require_once "../template/profesor.php";		break;
	   case 'REPRESENTANTE':   	require_once "../template/representante.php";	break;
  
  	}

?>
<div class="box-principal">
<h3 class="titulo">Listado de Secciones<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Secciones</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>id</th>
		      <th>Nombre</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  		<td><?php echo $row['id_seccion']; ?></td>
			    <td><?php echo $row['nombre_seccion']; ?></td>
			 <td>
			 	<a class="btn btn-warning" href="<?php echo URL; ?>secciones/editar/<?php echo $row['id_seccion']; ?>">Editar</a>
				<a class="btn btn-danger" href="<?php echo URL; ?>secciones/eliminar/<?php echo $row['id_seccion']; ?>">Eliminar</a>
			</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>