<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio</title>
  <style>
    .marquee {
      width: 1125px;
      height: 100px;
      overflow: hidden;
      opacity: 80%;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light color-menu" style="position:sticky; top: 0; width: 100%; z-index: 9999; background-color: rgb(95, 7, 107);">
    <div class="container-fluid">
      <a href="index.php" style="text-decoration: none;">
        <h1 class="inicio" style="color: white;">Colegio SR</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0 0 0 80px;">

          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tienda
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu Link">
              <li><a class="dropdown-item" href="principiantes/tienda/software.html">Software</a></li>
              <li><a class="dropdown-item" href="principiantes/tienda/software.html">Planes</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="principiantes/PaginaCursos/cursoServidores.html">Servidores locales</a></li>
              <li><a class="dropdown-item" href="principiantes/PaginaCursos/cSerEsc.html">Gestor Escolar</a></li>
              <li><a class="dropdown-item" href="principiantes/PaginaCursos/pagCobro.html">Gestor de cobro</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <div class="row">
            <div class="col-7">
              <div class="boton-registro">
                <a href="public/login.php" style="text-decoration: none; color:white;">Iniciar sesion</a>
              </div>
            </div>
            <div class="col-5">
              <div class="boton-registro">
                <a href="public/registro.php" style="text-decoration: none; color:white;">Registro</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/WhatsApp Image 2023-06-13 at 6.29.49 PM.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/WhatsApp Image 2023-06-13 at 6.29.49 PM (1).jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Empieza primer Y UNICO container -->
  <hr>
  <div class="container">
    <div class="row">
      <div style="margin-top:0" class="col-md-6">
        <img src="img/img_instructor.png" width=550px height=500px>
      </div>
      <div class="col-md-6"> <br><br><br>
        <h1 style="font-family:Impact;">¿Por qué elegirnos?</h1>
        <h2>Durante 6 años nos hemos posicionado como una de las mejores plataformas LMS al ser el aliado estratégico de las organizaciones para ayudarlos a cumplir con los objetivos de formación.</h2>
      </div>
      <hr>
    </div>
    <!--PRIMER ROW-->
    <h4>Colaboramos con diversas empresas</h4>
    <div class="marquee">
      <marquee scrollamount="15" behavior="scroll" direction="left"> ||
        <img src="img/github.png" width=100px height=100px> ||
        <img src="img/html.png" alt="" width=100px height=100px> ||
        <img src="img/css.png" width=100px height=100px> ||
        <img src="img/php.png" width=100px height=100px> ||
        <img src="img/jsss.png" width=100px height=100px> ||
        <img src="img/visual-studio.png" width=100px height=100px> ||
        <img src="img/canva.svg" width=100px height=100px> ||
        <img src="img/google.png" width=100px height=100px> ||
        <img src="img/mysql.svg" width=100px height=100px> ||
        <img src="img/myadmin.png" width=100px height=100px> ||

      </marquee>
    </div>
    <hr>
    <!-- SEGUNDO ROW-->
    <div class="row">
      <div class="col-md-6">
        <img class="w-100 mx-auto" src="img/cursos.png">
      </div>
      <div class="col-md-6"> <br><br><br>
        <h1 style="font-family:Impact;">CONOCE LOS CURSOS QUE TENEMOS PARA TI</h1>
        <h4>Elige entre nuestro 5 cursos básicos en videos con nuevo contenido cada mes!</h4>
        <div style=" width: 600px;
      height: 350px;
      overflow: hidden;">
          <marquee class="w-100 mx-auto" scrollamount="15" behavior="scroll" direction="left">
            <img src="img/cursos/1.png">
            <img src="img/cursos/2.png">
            <img src="img/cursos/3.png">
            <img src="img/cursos/4.png">
            <img src="img/cursos/6.png">
            <img src="img/cursos/7.png">
            <img src="img/cursos/gescobro.png">
          </marquee>
        </div>
      </div>

    </div>
    <hr>
    <!--TERMINA SEGUNDO ROW-->
    <!--EMPIEZA TERCER ROW-->

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img style="float:left; margin-right: -100px; margin-left:-70px;" src="img/contacto1.gif" width=400px height=430px>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12" style="padding:40px 0px 0px 0px;">
        <div>
          <h1 class="contacto-titulo">Contáctanos</h1>
          <form action="" method="post">
            <div class="row">
              <input type="text" name="nombre" placeholder="Nombre o Institucion" class="form-control" style="margin: 10px 0px" required pattern="[A-Z a-z ´,]+">
              <input type="email" name="correo" placeholder="Correo Electronico" class="form-control" style="margin: 10px 0px" required>
              <input type="number" name="telefono" placeholder="Numero Telefonico" class="form-control" style="margin: 10px 0px" required pattern="[0-99]+">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px; margin: 10px 0px" name="comentario" required></textarea>
                <label for="floatingTextarea2">Comentario</label>
              </div>
              <center><input type="submit" name="btn" value="Enviar" style="background-color: black; color: white; border-radius: 4px;"></center>
            </div>
            <br>
          </form>
          <?php
            include("php/conexion.php");
            $con = conectar();
            if(isset($_POST['btn'])){
              $nombre = $_POST['nombre'];
              $correo = $_POST['correo'];
              $telefono = $_POST['telefono'];
              $comentario = $_POST['comentario'];

              $query = mysqli_query($con, "INSERT INTO `comentarios` (`id`, `nombre`, `correo`, `telefono`, `comentario`) VALUES (NULL, '$nombre', '$telefono', '$correo', '$comentario');");

              ?>
                <script>alert("El comentario fue enviado con exito, resiviras una pronta respuesta c:")</script>
              <?php
            }
          ?>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="img/contacto2.gif" width=450px height=450px>
      </div>


    </div>
  </div>
  <!--TERMINE ROW 3 -->
  <footer style="background-color: rgb(95, 7, 107); padding:20px 0px 10px 0px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <a href="" style="color: white;">Politica de privacidad</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px 10px 0px 10px;">
          <a href=""><img src="img/icon/facebook.png" style="margin: 0px 10px 0px 10px;"></a>
          <a href=""><img src="img/icon/instagram (1).png" style="margin: 0px 10px 0px 0px;"></a>
          <a href=""><img src="img/icon/gorjeo.png" style="margin: 0px 10px 0px 0px;"></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>