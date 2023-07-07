<?php
session_start();
include("../php/conexion.php");
$con = conectar();
ini_set('error_reporting', 0);
if (!isset($_SESSION['correo'])) {
	header("Location: login.php");
} else {
	include("../admin/topbar.php");
?>

	<body>
		<!-- Slidebar, class body, nav bar -->
		<?php include("../admin/slidebar.php"); ?>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-titles"><img src="../img/gifs/profile.gif" width="50 rem"> Usuario <small>Administrador</small></h1>
			</div>
			<p class="lead">Toma en cuenta que agregar un usuario administrador es dar acceso total a todos los apartados de tu software, podria resultar en un mal de no tener el suficiente conocimiento
				de su funcionamiento.
			</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
						<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
										<?php $fecha = date('Y-m-d'); ?>
										<form action="" method="post">
											<div class="form-group label-floating">
												<label class="control-label">Nombre completo</label>
												<input class="form-control" type="text" name="nombres" required>
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Correo</label>
												<input class="form-control" type="text" name="correo" required>
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Localidad</label>
												<input class="form-control" type="text" name="ubicacion" required>
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Telefono</label>
												<input class="form-control" type="text" name="telefono" required>
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Contraseña</label>
												<input class="form-control" type="password" name="password" required>
											</div>
											<div class="form-group label-floating">
												<label class="control-label">verificar contraseña</label>
												<input class="form-control" type="password" name="verifiPass" required>
											</div>
											<div class="form-group">
												<input type="hidden" name="foto" value="../img/avatar/inicio.jpg">
												<input type="hidden" name="rol" value="administrador">
												<input type="hidden" name="fecha" value="<?php echo $fecha ?>">
											</div>
											<p class="text-center">
												<input type="submit" class="btn btn-info btn-raised btn-sm" name="guardar" value="agregar"></input>
											</p>
										</form>
										<?php
										if (isset($_POST['guardar'])) {

											$name = $_POST["nombres"];
											$correoAlu  = $_POST["correo"];
											$ubi = $_POST["ubicacion"];
											$telefono = $_POST["telefono"];
											$passwordAlu = $_POST["password"];
											$verifiPass = $_POST["verifiPass"];
											$rolAlu = $_POST["rol"];
											$fotoAlu = $_POST["foto"];
											$fecha = $_POST["fecha"];

											$comprobaremail = mysqli_num_rows(mysqli_query($con, "SELECT correo FROM usuarios WHERE correo = '$correoAlu';"));

											if ($comprobaremail >= 1) {
										?><center>
													<script>alert("Correo existente")</script>
												</center><?php
															header("Location: admin.php");
														} else {
															if ($passwordAlu != $verifiPass) {
															?><center>
														<script>alert("Las contraseñas no coinciden")</script>
													</center><?php
																header("Location: admin.php");
															} elseif ($passwordAlu == $verifiPass) {

																$insert = mysqli_query($con, "INSERT INTO `usuarios` (`id`, `nombres`, `correo`, `ubicacion`, `telefono`, `password`, `rol`, `foto`, `fecha`) VALUES (NULL, '$name', '$correoAlu', '$ubi', '$telefono', '$passwordAlu', '$rolAlu', '$fotoAlu', '$fecha');");

																if ($insert) {
																?><center>
															<script>alert("El registro se realizo con exito")</script>
														</center><?php
																header("Location: admin.php");
																}
															}
														}
													}
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Nombres completo</th>
											<th class="text-center">Localidad</th>
											<th class="text-center">Correo</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$admin = mysqli_query($con, "SELECT * FROM usuarios WHERE rol LIKE 'administrador'");
										while($col = mysqli_fetch_array($admin)){
											?>
										<tr>
											<td><?php echo $col['nombres'] ?></td>
											<td><?php echo $col['ubicacion'] ?></td>
											<td><?php echo $col['correo'] ?></td>
											<td><?php echo $col['telefono'] ?></td>
											<td>
												<form action="update.php" method="post">
													<input type="hidden" name="id" value="<?php echo $col['id'] ?>">
													<input type="submit" name="admin" value="*" class="btn btn-success btn-raised btn-xs">
												</form>
											</td>
											<td>
												<form action="../php/delete.php" method="post">
													<input type="hidden" name="id" value="<?php echo $col['id'] ?>">
													<input type="submit" name="admin" value="*" class="btn btn-danger btn-raised btn-xs">
												</form>
											</td>
										</tr>
											<?php
										}
										?>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
									<li class="disabled"><a href="#!">«</a></li>
									<li class="active"><a href="#!">1</a></li>
									<li><a href="#!">2</a></li>
									<li><a href="#!">3</a></li>
									<li><a href="#!">4</a></li>
									<li><a href="#!">5</a></li>
									<li><a href="#!">»</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>

		<!-- Notifications area -->
		<section class="full-box Notifications-area">
			<div class="full-box Notifications-bg btn-Notifications-area"></div>
			<div class="full-box Notifications-body">
				<div class="Notifications-body-title text-titles text-center">
					Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
				</div>
				<div class="list-group">
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="zmdi zmdi-alert-triangle"></i>
						</div>
						<div class="row-content">
							<div class="least-content">17m</div>
							<h4 class="list-group-item-heading">Tile with a label</h4>
							<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</div>
					<div class="list-group-separator"></div>
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="zmdi zmdi-alert-octagon"></i>
						</div>
						<div class="row-content">
							<div class="least-content">15m</div>
							<h4 class="list-group-item-heading">Tile with a label</h4>
							<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</div>
					<div class="list-group-separator"></div>
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="zmdi zmdi-help"></i>
						</div>
						<div class="row-content">
							<div class="least-content">10m</div>
							<h4 class="list-group-item-heading">Tile with a label</h4>
							<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
						</div>
					</div>
					<div class="list-group-separator"></div>
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="zmdi zmdi-info"></i>
						</div>
						<div class="row-content">
							<div class="least-content">8m</div>
							<h4 class="list-group-item-heading">Tile with a label</h4>
							<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- modal cerrar sesion -->
		<?php include("../admin/cerrarcecion.php") ?>
		<!--====== Scripts -->
		<?php include("../admin/footer.php") ?>
	</body>
<?php
}
?>

</html>