<?php
include("conexion.php");
$conect = conectar();
if (isset($_POST['curso'])) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $date = $_POST['fecha'];
    $status = $_POST['status'];
    $link = $_POST['link'];
    $foto = $_FILES['portada'];
    echo $foto;
    $directorioDestino = "../img/baner";
    $tmp_name = $foto['tmp_name'];
    $img_file = $foto['name'];
    $img_type = $foto['type'];
    //si es una imagen entra 
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
        strpos($img_type, "jpg") || strpos($img_type, "png")))) {
        //si se cumple el tipo de archivo se realiza la operacion
        $destino = $directorioDestino . '/' . $img_file;
        mysqli_query($conect, "INSERT INTO `cursos` (`id_curso`, `nombreCurso`, `status`, `descripcion`, `fecha`, `linkCurso`, `portada`) VALUES (NULL, '$nombre', '$status', '$descripcion', '$date', '$link', '$destino');");
        (move_uploaded_file($tmp_name, $destino));

        header("Location: ../public/school.php");
    }
    ?>
    <script>
        alert("la foto de portada no es admitida")
    </script>
    <?php
    header("Refresh: 1; url= ../public/school.php");
}
?>