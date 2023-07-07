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
				<h1 class="text-titles">Control <small> general</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Admin
				</div>
				<div class="full-box tile-icon text-center">
					<img src="../img/gifs/profile.gif" width="120px">
				</div>
				<div class="full-box tile-number text-titles">
					<?php
					$admin = mysqli_query($con, "SELECT * FROM usuarios WHERE rol LIKE 'administrador'");
					$countAdmin = mysqli_num_rows($admin);
					?>
					<p class="full-box"><?php echo $countAdmin; ?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Docentes
				</div>
				<div class="full-box tile-icon text-center">
					<img src="../img/gifs/maestro.gif" width="120px">
				</div>
				<div class="full-box tile-number text-titles">
					<?php
					$docente = mysqli_query($con, "SELECT * FROM usuarios WHERE rol LIKE 'docente'");
					$countDoc = mysqli_num_rows($docente);
					?>
					<p class="full-box"><?php echo $countDoc; ?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Alumnos
				</div>
				<div class="full-box tile-icon text-center">
					<img src="../img/gifs/alumno.gif" width="120px">
				</div>
				<div class="full-box tile-number text-titles">
					<?php
					$alu = mysqli_query($con, "SELECT * FROM usuarios WHERE rol LIKE 'alumno'");
					$countAlu = mysqli_num_rows($alu);
					?>
					<p class="full-box"><?php echo $countAlu; ?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Cursos
				</div>
				<div class="full-box tile-icon text-center">
					<img src="../img/gifs/clase-en-linea.gif" width="120px">
				</div>
				<div class="full-box tile-number text-titles">
					<?php
					$cursos = mysqli_query($con, "SELECT * FROM cursos WHERE estatus LIKE 'Activo'");
					$countCursos = mysqli_num_rows($cursos);
					?>
					<p class="full-box"><?php echo $countCursos; ?></p>
					<small>Activos</small>
				</div>
			</article>
		</div>
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-titles">Ultimos <small> Registros</small></h1>
			</div>
			<section id="cd-timeline" class="cd-container">
				<?php
				$query = mysqli_query($con, "SELECT * FROM usuarios LIMIT 8");
				while ($row = mysqli_fetch_array($query)) {
				?>
					<div class="cd-timeline-block">
						<div class="cd-timeline-img">
							<img src="<?php echo $row['foto'] ?>" alt="user-picture">
						</div>
						<div class="cd-timeline-content">
							<h4 class="text-center text-titles"><?php echo $row['nombres'].'('.$row['rol'].')'?></h4>
							<p class="text-center">
								<i class="glyphicon glyphicon-envelope"></i> correo <em><?php echo $row['correo'] ?></em>
							</p>
							<span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> <?php echo $row['fecha'] ?></span>
						</div>
					</div>
				<?php
				}
				?>
			</section>


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