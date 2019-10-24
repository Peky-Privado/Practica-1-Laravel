<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">

  <title>Inicio - Practica 1 Laravel</title>

  <!-- Bootstrap core CSS -->
  <link href="../resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="ruta1">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br>
        <img src="../resources/img/2368872.jpg">
        <h1>¿Has olvidado tu contraseña?</h1>
        <form action="{{ url('ruta1') }}" method="get" enctype="multipart/form-data">
        <input type="email" name="email" placeholder="Introduzca su email" value="{{ old('login') }}">
        <br>
        <br>
        <input type="submit" value="Enviar">
        </form>
      </div>
    </div>
  </div>
</body>

</html>
