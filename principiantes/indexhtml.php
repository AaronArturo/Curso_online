<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styleP.css">
    <title>Document</title>
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
              <li><a class="dropdown-item" href="./principiantes/tienda/software.html">Software</a></li>
              <li><a class="dropdown-item" href="./principiantes/tienda/software.html">Planes</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="./principiantes/PaginaCursos/cursoServidores.html">Servidores locales</a></li>
              <li><a class="dropdown-item" href="./principiantes/PaginaCursos/cSerEsc.html">Gestor Escolar</a></li>
              <li><a class="dropdown-item" href="./principiantes/PaginaCursos/pagCobro.html">Gestor de cobro</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <div class="row">
            <div class="col-7">
              <div class="boton-registro">
                <a href="public/iniciarSesion.php" style="text-decoration: none; color:white;">Iniciar sesion</a>
              </div>
            </div>
            <div class="col-5">
              <div class="boton-registro">
                <a href="public/rAlumno.php" style="text-decoration: none; color:white;">Registro</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
      <img class="w-100" src="img/htmlbg.png" alt="" width="1310px">
      <div class="container">
        <div class="row">
            <div class="col-md-6"> <br>
            <h1>Hablemos de HTML...</h1>
            <p>HTML (HyperText Markup Language) es un lenguaje de marcado utilizado para estructurar y presentar contenido en la web.</p1>
              <p>En los videos siguientes te mostraremos como empezar con esta herramienta,que sera la base para empezar con este gran proyecto.</p>
            <strong><h3>Lo que necesitas:</h3></strong>
            <ul>
              <li>Editor de texto: Puede ser Visual Studio, Notepad++, Sublime text, etc. </li>
              <li>Navegador: Puede ser el de tu preferencia pero te recomendamos Chrome para evitar errores de compatibilidad. </li>
              <li>Servidor Local: Te recomendamos Xampp o Laragon. </li>
            </ul>
            </div>
        <div class="col-md-6">
          <img src="img/html.png" style="width: 500px; height:500px">
        </div>
        </div>

        <div class="row">
          ((VIDEO Introduccion AL HTML))
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>