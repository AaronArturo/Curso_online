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
				<h1 class="text-titles"><img src="../img/gifs/clase-en-linea.gif" width="50 rem"> Nuevos <small>cursos</small></h1>
			</div>
			<p class="lead">Los cursos son la principal herramienta de nuestro entorno, aqui podremos crear el nuevo material que va dirijido a los nuevos alumnos y a los alumnos actuales</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						<li><a href="#listPeriod" data-toggle="tab"><i class="zmdi zmdi-time-restore"></i> Lista de cursos</a></li>
						<li><a href="#newSchool" data-toggle="tab"><i class="zmdi zmdi-balance"></i> School Data</a></li>
						<!--<li><a href="#newYear" data-toggle="tab"><i class="zmdi zmdi-calendar-check"></i> New Year</a></li>
						<li><a href="#listYear" data-toggle="tab"><i class="zmdi zmdi-calendar-note"></i> List Year</a></li>-->
					</ul>
					<div class="tab-content">
					<div class="tab-pane fade active in" id="listPeriod">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Nombre</th>
											<th class="text-center">Descripcion</th>
											<th class="text-center">Fecha</th>
											<th class="text-center">Status</th>
											<th class="text-center">Update</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$admin = mysqli_query($con, "SELECT * FROM cursos;");
										while ($col = mysqli_fetch_array($admin)) {
										?>

											<tr>
												<td><?php echo $col['nombreCurso'] ?></td>
												<td><?php echo $col['descripcion'] ?></td>
												<td><?php echo $col['fecha'] ?></td>
												<td>
													<form action="../php/estatus.php" method="post">
													<input type="submit" name="estatus" <?php if ($col['estatus'] == "Activo") { ?> class="btn btn-success btn-raised btn-xs" value="<?php echo $col['estatus'] ?>" <?php } if ($col['estatus'] == "Inactivo") { ?> class="btn btn-danger btn-raised btn-xs" value="<?php echo $col['estatus'] ?>" <?php } ?>>
													<input type="hidden" name="id" value="<?php echo$col['id_curso'] ?>">	
													</form>
												</td>
												<td>
													<form action="updateCurso.php" method="post">
														<input type="hidden" name="id" value="<?php echo $col['id_curso'] ?>">
														<input type="submit" name="cursos" value="*" class="btn btn-success btn-raised btn-xs">
													</form>
												</td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="newSchool">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
										<form action="">
											<div class="form-group label-floating">
												<label class="control-label">NIT, CODE</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Name</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Address</label>
												<textarea class="form-control"></textarea>
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Phone</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">FAX</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Email</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">WEB</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Country</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">City</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Coin</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Max Score</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Min Score</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label class="control-label">Year</label>
												<select class="form-control">
													<option>2017</option>
													<option>2016</option>
													<option>2015</option>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label">School Logo</label>
												<div>
													<input type="text" readonly="" class="form-control" placeholder="Browse...">
													<input type="file">
												</div>
											</div>
											<p class="text-center">
												<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
											</p>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="newYear">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
										<form action="">
											<div class="form-group label-floating">
												<label class="control-label">Year</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label class="control-label">Start Date</label>
												<input class="form-control" type="date">
											</div>
											<div class="form-group">
												<label class="control-label">End Date</label>
												<input class="form-control" type="date">
											</div>
											<p class="text-center">
												<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
											</p>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="listYear">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Year</th>
											<th class="text-center">Start Date</th>
											<th class="text-center">End Date</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>2017</td>
											<td>23/01/2017</td>
											<td>07/11/2017</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>2016</td>
											<td>23/01/2016</td>
											<td>07/11/2016</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>2015</td>
											<td>23/01/2015</td>
											<td>07/11/2015</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
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