<?php
include("../php/conexion.php");
$con = conectar();
include("../admin/topbar.php");
if ($_POST['admin']) {
    $id = $_POST['id'];
    $select = mysqli_query($con, "SELECT * FROM `usuarios` WHERE `id` LIKE '$id'");
    while ($row = mysqli_fetch_array($select)) {
        include("../admin/slidebar.php");
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#" data-toggle="tab">Actualizar</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="new">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                                        <form action="../php/update.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo$row['id'] ?>">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Nombre completo</label>
                                                <input class="form-control" type="text" name="nombres" value="<?php echo $row['nombres'] ?>" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Correo</label>
                                                <input class="form-control" type="text" name="correo" value="<?php echo $row['correo'] ?>" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Localidad</label>
                                                <input class="form-control" type="text" name="ubicacion" value="<?php echo $row['ubicacion'] ?>" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Telefono</label>
                                                <input class="form-control" type="text" name="telefono" value="<?php echo $row['telefono'] ?>" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Contraseña</label>
                                                <input class="form-control" type="password" name="password" value="<?php echo $row['password'] ?>" required>
                                            </div>
                                            <input type="hidden" value="<?php echo $row['rol'] ?>" name="rol">
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