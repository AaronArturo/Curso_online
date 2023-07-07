<?php
session_start();
include("../php/conexion.php");
$con = conectar();
ini_set('error_reporting', 0);
if (isset($_SESSION['correo'])) {
	header("Locatiopn: home.php");
} else {
?>
	<!DOCTYPE html>
	<html lang="es">

	<head>
		<title>LogIn</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="../css/main.css">
	</head>

	<body class="cover" style="background-image: url(../assets/img/loginFont.jpg);">
	<div class="container">
		<div class="row">
				<a href="../index.php">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </a>
		</div>
	</div>
		<div class="full-box logInForm">
		<form action="" method="post" autocomplete="off">
			<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
			<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
			<div class="form-group label-floating">
				<label class="control-label" for="UserEmail">E-mail</label>
				<input class="form-control" id="UserEmail" type="email" name="correo" required>
				<p class="help-block">Escribe tú E-mail</p>
			</div>
			<div class="form-group label-floating">
				<label class="control-label" for="UserPass">Contraseña</label>
				<input class="form-control" id="UserPass" type="password" name="password" required>
				<p class="help-block">Escribe tú contraseña</p>
			</div>
			<div class="form-group text-center">
				<input type="submit" name="ingresar" value="Iniciar sesión" class="btn btn-raised btn-danger">
			</div>
		</form>
		<a href="registro.php">Registrarme</a>
		</div>
		<!--Inicia el codigo de verificacion y ingreso con sesion -->
		<?php
		if (isset($_POST['ingresar'])) {
			$correo = $_POST['correo'];
			$pass = $_POST['password'];

			$query = mysqli_query($con, "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$pass';");
			$contar = mysqli_num_rows($query);
			if ($contar  == 1) {

				while ($row = mysqli_fetch_array($query)) {

					if ($correo = $row['correo'] && $pass = $row['password']) {

						$_SESSION['correo'] = $row['correo'];
						$_SESSION['id'] = $row['id'];
						$_SESSION['nombres'] = $row['nombres'];
						$_SESSION['foto'] = $row['foto'];
						$_SESSION['rol'] = $row['rol'];
						$_SESSION['correo'] = $row['correo'];
						$_SESSION['apellidoPat'] = $row['apellidoPat'];
						$_SESSION['apellidoMat'] = $row['apellidoMat'];

						header("Location: ../php/redireccion.php");
					}
				}
			} else {
		?>
			<center>
				<p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Usuario inexistente, verifique sus datos ingresados</p>
			</center>
			<?php
			header("Refresh: 2; url= login.php");
						}
					}
							?>
		<!--====== Scripts -->
		<?php include("../admin/footer.php") ?>
	</body>
<?php
}
?>

	</html>