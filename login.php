<?php
	
	require_once "Config/Conexion.php";
	
	class Login{

		private $error;
		private $user;
		private $pass;

		public function index(){
?>
			<!DOCTYPE html>
			<html>
			<head>
				<title>Inicio de Sesión</title>
				<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
				<link rel="stylesheet" href="template/css/CGL-UI.css">
			</head>
			<body>
				<div class="login">
					<?php if (isset($this->error)): ?>

						<div class="error"><h3><?php echo $this->error; ?></h3></div>

					<?php endif ?>
					<form action="" method="POST">
					    <input type="text" name="user" placeholder="Usuario" required>
					    <input type="password" name="pass" placeholder="Contraseña" required>
						<input type="hidden" name="verificar" value="1">
					    <input type="submit" value="Entrar">
					</form>
					<div><a href="#">Olvidé mi Contraseña</a></div>
					<div>&copy; 2018 SCHOOL | Todos los derechos reservados</div>
				</div>
			</body>
			</html>
<?php		
		}

		public function verificar($user, $pass){
			$this->user = $user;
			$this->pass = md5($pass);
			$conex = new Conexion;
			$sql = "SELECT * FROM usuarios WHERE login_usr = '{$this->user}' AND pass_usr = '{$this->pass}'";
			$datos = $conex->ion->query($sql);
			if ($row = mysqli_fetch_array($datos)) {
				$sql = "UPDATE usuarios SET ulti_acs_usr = NOW(), activo_usr = 'SI' WHERE login_usr = '{$this->user}' AND pass_usr = '{$this->pass}'";
				$conex->ion->query($sql);
				session_start();
				$_SESSION['codg_usr'] = $row['codg_usr'];
				$_SESSION['nomb_usr'] = $row['nomb_usr'];
				$_SESSION['apel_usr'] = $row['apel_usr'];
				$_SESSION['login_usr'] = $row['login_usr'];
				$_SESSION['email_usr'] = $row['email_usr'];
				$_SESSION['niv_acs_usr'] = $row['niv_acs_usr'];
				$_SESSION['ulti_acs_usr'] = $row['ulti_acs_usr'];
				$_SESSION['activo_usr'] = $row['activo_usr'];
				header('Location: '.URL);
			} else {
				$this->error = "Contraseña o Usuario Inválido";
			}
		}
	}

	@$user = $_POST['user'];
	@$pass = $_POST['pass'];
	@$verificar = $_POST['verificar'];

	$login = new Login;

	if ($verificar == '1') {
		$login->verificar($user, $pass);
	}

	$login->index();
?>