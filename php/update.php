<?php
session_start();
include("../php/conexion.php");
ini_set('error_reporting', 0);
$con = conectar();

if(isset($_POST['admin'])){
    $id = $_POST['id'];
    $name = $_POST['nombres'];
    $correo = $_POST['correo'];
    $ubicacion = $_POST['ubicacion'];
    $telefono = $_POST['telefono'];
    $pass = $_POST['password'];
    $rol = $_POST['rol'];

    $query = mysqli_query($con, "UPDATE `usuarios` SET `nombres` = '$name', `correo` = '$correo', `ubicacion` = '$ubicacion', `telefono` = '$telefono', `password` = '$pass' WHERE `usuarios`.`id` = $id;");

    

    if($rol == 'administrador'){
        header("Location: ../public/admin.php");
    }
    if($rol == 'docente'){
        header("Location: ../public/teacher.php");
    }
    if($rol == 'alumno'){
        header("Location: ../public/student.php");
    }
    
}
?>