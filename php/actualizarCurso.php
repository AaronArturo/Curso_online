<?php
include("conexion.php");
$conect = conectar();
session_start();
//ini_set("error_reporting", 0);
if ($_POST) {
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    
    $foto = $_FILES['portada'];
    $directorioDestino = "../img/cursos";

    $tmp_name = $foto['tmp_name'];

    $img_file = $foto['name'];
    $img_type = $foto['type'];
    //si es una imagen entra 
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
        strpos($img_type, "jpg") || strpos($img_type, "png")))) {
            $status = $_POST['status'];
            echo "estoy aqui";
        //si se cumple el tipo de archivo se realiza la operacion
        $destino = $directorioDestino . '/' . $img_file;
        $tipo = $status;
        mysqli_query($conect, "UPDATE cursos SET nombreCurso = '$nombre', descripcion = '$descripcion', fecha = '$fecha', `estatus` = '$tipo', portada = '$destino' WHERE id_curso = $id;");
        (move_uploaded_file($tmp_name, $destino));

        ?>
        <script>
        alert("Foto de perfil actualizada con exito")
    </script>
        <?php
        
        //header("Location: ../public/school.php/#listPeriod");
    }
    ?>
    <script>
        alert("No se admite este tipo de archivo")
    </script>
    <?php
    //header("Location: ../public/school.php");
}
?>