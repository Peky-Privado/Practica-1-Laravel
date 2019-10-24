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
        <img src="../resources/img/5844.jpg">
        <h1>Iniciar sesion</h1>
        <form action="{{ url('rutaLogin') }}" method="get" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Usuario" value="{{ old('nombre') }}">
        @error('login')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <input type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Enviar">
        </form>
        <form action="{{ url('forgotten') }}" method="get" enctype="multipart/form-data">
        <input type="submit" value="¿Contraseña olvidada?">
        </form>
      </div>
    </div>
  </div>
</body>

</html>
