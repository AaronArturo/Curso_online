<?php
session_start();
$rol = $_SESSION['rol'];

if($rol == 'administrador'){
    header("Refresh: 2; url= ../public/home.php");
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <center>
        <div class="container">
            <img src="../img/gifs/cargando.gif">
        </div>
        </center>
    </body>
    </html>
    <?php

}else{

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <style>
            body{
                background-image: url(../img/gifs/cargando.gif);
                background-repeat: no-repeat;
                background-position: center;
            }
        </style>
    </body>
    </html>
    <?php

    header("Refresh: 2; url= ../public/inicio.php");
}
?>