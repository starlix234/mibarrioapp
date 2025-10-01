<?php if(!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
<section>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-menu">  
  <div class="container-fluid">
    <img class="logo" src="../assets/img/logo2.png" alt="Logo Mi Barrio">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link" href="#">Inicio</a>
        <a class="nav-link" href="#">Postulaciones</a>
        <a class="nav-link" href="#">Certificado</a>
        <a class="nav-link" href="../Vista/vista-admin.php">Panel Admin</a>
        <a class="nav-link" href="../Controlador/controlador-cerrar-sesion.php">Cerrar sesión</a>
      </div>
    </div>
  </div>
</nav>
</section>
</header>
<!-- ...resto del contenido de la vista-menu-admin... -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
