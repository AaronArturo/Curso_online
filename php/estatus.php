<?php
include("conexion.php");
$con = conectar();
$estatus = $_POST['estatus'];
$id = $_POST['id'];

if($estatus == 'Activo'){
    
    $query = mysqli_query($con,"UPDATE `cursos` SET `estatus` = 'Inactivo' WHERE `cursos`.`id_curso` = $id;");

    header("Location: ../public/school.php");
}else{
    
    $query = mysqli_query($con,"UPDATE `cursos` SET `estatus` = 'Activo' WHERE `cursos`.`id_curso` = $id;");

    header("Location: ../public/school.php");
}

?>