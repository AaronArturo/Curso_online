<?php
session_start();
include("../php/conexion.php");
$con = conectar();
//ini_set('error_reporting', 0);
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
} else {
    include("../admin/topbar.php");
    $id = $_SESSION['id'];
    $query = mysqli_query($con, "SELECT cursos.nombreCurso, usuarios.id FROM alumno_curso INNER JOIN cursos ON cursos.id_curso = alumno_curso.nombre_curso INNER JOIN usuarios ON usuarios.id = alumno_curso.nombre_alumno;");
    $band = mysqli_fetch_array($query);
?>

    <body>
        <!-- Slidebar, class body, nav bar -->
        <?php include("../admin/slidebar.php"); ?>

        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles">Bienvenido <small> "<?php echo $_SESSION['nombres'] ?>"</small></h1>
            </div>
            <p></p>
        </div>
        <div class="full-box text-center" style="padding: 30px 10px 10px;">
                <div class="card" style="margin: 0px 10px 15px 0px;">
                    <div style="background-color: rgb(43, 174, 168); height: 40px; line-height: 40px; font-size: 20px; color:white;">
                        <p><?php echo $band['nombreCurso'] ?></p>
                    </div>
                    <div style="margin:5px 0px 5px 0px">
                        <video src="../video/prueba.mp4" controls height="280"></video>
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