<?php
include("../php/conexion.php");
$con = conectar();
include("../admin/topbar.php");
$fecha = date('Y-m-d');
?>

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
		<p class="text-center text-muted text-uppercase">Registrate</p>
		<div class="form-group label-floating">
			<label class="control-label" for="UserEmail">Nombre</label>
			<input class="form-control" type="text" name="nombres" required>
			<p class="help-block">Escribe tu nombre completo</p>
		</div>
		<div class="form-group label-floating">
			<label class="control-label" for="UserPass">Correo</label>
			<input class="form-control" type="text" name="correo" required>
			<p class="help-block">Escribe tú correo</p>
		</div>
		<div class="form-group label-floating">
			<label class="control-label" for="UserPass">Contraseña</label>
			<input class="form-control" type="password" name="password" required>
			<p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group label-floating">
			<label class="control-label" for="UserPass">Confirmar contraseña</label>
			<input class="form-control" type="password" name="verifiPass" required>
			<p class="help-block">Confirma tu contraseña</p>
		</div>
		<input type="hidden" name="rol" value="alumno">
		<input type="hidden" name="foto" value="../img/avatar/inicio.jpg">
		<input type="hidden" name="fecha" value="<?php echo $fecha ?>">
		<div class="form-group text-center">
			<input type="submit" name="agregar" value="Iniciar sesión" class="btn btn-raised btn-danger">
		</div>
	</form>
	<a href="login.php">ya tengo una cuenta</a>
	<?php
	if (isset($_POST['agregar'])) {
		$name = $_POST["nombres"];
		$correoAlu  = $_POST["correo"];
		$passwordAlu = $_POST["password"];
		$verifiPas = $_POST["verifiPass"];
		$rolAlu = $_POST["rol"];
		$fotoAlu = $_POST["foto"];
		$date = $_POST["fecha"];

		$comprobaremail = mysqli_num_rows(mysqli_query($con, "SELECT correo FROM usuarios WHERE correo = '$correoAlu';"));

		if ($comprobaremail >= 1) {
	?><center>
				<p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Correo Existente</p>
			</center><?php
						header("Refresh: 2; url= registro.php");
					} else {
						if ($passwordAlu != $verifiPas) {
						?><center>
					<p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Las contraseñas no coinciden</p>
				</center><?php
							header("Refresh: 2; url= registro.php");
						} elseif ($passwordAlu == $verifiPas) {

							$insert = mysqli_query($con, "INSERT INTO `usuarios` (`id`, `nombres`, `correo`, `password`, `rol`, `foto`, `fecha`) VALUES (NULL, '$name', '$correoAlu', '$passwordAlu', '$rolAlu', '$fotoAlu', '$fecha');");

							if ($insert) {
							?><center>
						<p style="background-color: rgb(0, 206, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Se realizo el registro con exito</p>
					</center><?php

								header("Refresh: 2; url= login.php");
							}
						}
					}
				}
								?>
</div>
	<!-- modal cerrar sesion -->
	<?php include("../admin/cerrarcecion.php") ?>
	<!--====== Scripts -->
	<?php include("../admin/footer.php") ?>
</body>

</html>