<?php
include("conexion.php");
$con=conectar();

if($_POST['ingresarCurso']){
    $id_alumno = $_POST['id_alumno'];
    $id_curso = $_POST['id_curso'];
    $fecha = $_POST['fecha'];
    $link = $_POST['link'];

    $query = mysqli_query($con, "INSERT INTO `alumno_curso` (`id`, `nombre_curso`, `nombre_alumno`, `fechaIngreso`) VALUES (NULL, '$id_curso', '$id_alumno', '$fecha');");

    header("Location: $link");
}
?>