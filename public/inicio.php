<?php
session_start();
include("../php/conexion.php");
$con = conectar();
ini_set('error_reporting', 0);
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
} else {
    include("../admin/topbar.php");
    $fecha = date("Y-m-d");
?>

    <body>
        <!-- Slidebar, class body, nav bar -->
        <?php include("../admin/slidebar.php"); ?>

        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles">Wellcome <small> "El exito en la vida se alcanza a travez de pequeños pasos"</small></h1>
            </div>
            <p></p>
        </div>
        <div class="full-box text-center" style="padding: 30px 10px 10px;">
            <?php
            $query  = mysqli_query($con, "SELECT * FROM `cursos` WHERE `estatus` LIKE 'Activo'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a data-toggle="modal" data-target=".bs-example-modal-lg">
                        <div class="card" style="margin: 0px 0px 15px 0px;">
                            <div style="background-color: rgb(43, 174, 168); height: 40px; line-height: 40px; font-size: 20px; color:white;">
                                <p><?php echo $row['nombreCurso'] ?></p>
                            </div>
                            <div style="margin:5px 0px 5px 0px">
                                <img src="<?php echo $row['portada'] ?>" width="220px">
                            </div>
                            <div class="tile">
                                <p><?php echo $row['descripcion'] ?></p>
                            </div>
                            <div>
                                <p style="font-size: 12px; color: black;"><?php echo $row['fecha'] ?></p>
                            </div>
                        </div>
                    </a>
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
        <!-- ingresar al curso -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Ingreso al curso</h4>
                    </div>
                    <?php
                    $id = $_SESSION['id'];
                    $intruso = mysqli_query($con, "SELECT * FROM `alumno_curso` WHERE `nombre_alumno` = $id");
                    $band = mysqli_fetch_array($intruso);
                    if ($_SESSION['id'] != $band['nombre_alumno']) {
                    ?>
                        <div class="modal-body">
                            <p>Estas a punto de iniciar el curso <?php echo $row['nombreCurso'] ?>, una vez inciado el curso solo podras obtener tu certificado al concluir con un resultado de mas de 80%,
                                contaras con el apoyo de profesionales de la tecnologia, quienes te acompañaran de inicio a fin en este trayecto c:</p>
                        </div>
                        <div class="modal-footer">
                            <form action="../php/alumno_curso.php" method="post">
                                <input type="hidden" name="id_alumno" value="<?php echo $_SESSION['id'] ?>">
                                <input type="hidden" name="id_curso" value="<?php echo $row['id_curso'] ?>">
                                <input type="hidden" name="fecha" value="<?php echo $fecha ?>">
                                <input type="hidden" name="link" value="<?php echo $row['linkCurso'] ?>">
                                <input type="submit" name="ingresarCurso" value="aceptar" class="btn btn-primary">
                            </form>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="modal-body">
                            <p>Holaa <?php echo $_SESSION['nombres'] ?>, bienvenido de nuevo</p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo$row['linkCurso'] ?>" class="btn btn-primary">Ingresar</a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- modal cerrar sesion -->
        <?php include("../admin/cerrarcecion.php") ?>
        <!--====== Scripts -->
        <?php include("../admin/footer.php") ?>
    </body>
<?php
            }
        }
?>

</html>