<?php

	$Carpeta = "Grados";
	$Accion  = "Editar";

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
<h3 class="titulo">Editar Secciones<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar sección <?php echo $datos['nombre_seccion']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre de la sección</label>
				        <input class="form-control" value="<?php echo $datos['nombre_seccion']; ?>" name="nombre_seccion" type="text" required>
				    </div>
				    <input value="<?php echo $datos['id_seccion']; ?>" name="id_seccion" type="hidden">
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>