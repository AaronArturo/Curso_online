<?php
include("../php/conexion.php");
$con = conectar();
if(isset($_POST['admin'])){
    $id = $_POST['id'];
    $query = mysqli_query($con, "DELETE FROM usuarios WHERE `usuarios`.`id` = $id;");
    header("Location: ../public/admin.php");
}
?>