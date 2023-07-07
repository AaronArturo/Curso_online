<?php
include("../php/conexion.php");
$con = conectar();
include("../admin/topbar.php");
if ($_POST['cursos']) {
    $id = $_POST['id'];
    $fecha = date("Y-m-d");
    $select = mysqli_query($con, "SELECT * FROM `cursos` WHERE `id_curso` LIKE '$id'");
    while ($row = mysqli_fetch_array($select)) {
        include("../admin/slidebar.php");
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#" data-toggle="tab">Actualizar curso</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="new">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                                        <form action="../php/actualizarCurso.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo$row['id_curso'] ?>">
                                            <input type="hidden" name="fecha" value="<?php echo $fecha ?>">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Nombre del curso</label>
                                                <input class="form-control" type="text" name="nombre" value="<?php echo $row['nombreCurso'] ?>">
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Descripcion o mensaje del curso</label>
                                                <input class="form-control" type="text" name="descripcion" value="<?php echo $row['descripcion'] ?>">
                                            </div>
                                            <div>
                                                <label class="control-label">Imagen del curso</label>
                                                <input style="background-color: rgb(5, 145, 110);" type="file" name="portada" value="<?php echo $row['portada'] ?>">
                                            </div>
                                            <p class="text-center">
                                                <input type="submit" class="btn btn-info btn-raised btn-sm" name="admin" value="actualizar"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal cerrar sesion -->
		<?php include("../admin/cerrarcecion.php") ?>
<?php
    }
    include("../admin/footer.php");
}
?>