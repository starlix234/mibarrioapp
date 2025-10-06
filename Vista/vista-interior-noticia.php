<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia Interior</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-interior">
<?php include("../Controlador/controlador-mostrar-noticia.php")?>

<header>
<?php if(!isset($_SESSION)) session_start(); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-menu">  
  <div class="container-fluid">
    <img class="logo" src="../assets/img/logo2.png" alt="Logo Mi Barrio">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php include("../Controlador/controlador-datos-principal.php")?>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link" href="../vista/index.php">Inicio</a>
        <a class="nav-link" href="#">Postulaciones</a>
        <a class="nav-link" href="#">Certificado</a>
        <?php
        if(isset($_SESSION['id_usuario'])) {
          $rol = isset($_SESSION['id_rol']) ? $_SESSION['id_rol'] : null;
          if($rol == 1) {
            echo '<a class="nav-link" href="../Vista/vista-admin.php">Panel Admin</a>';
          } elseif($rol == 2) {
            echo '<a class="nav-link" href="../Vista/vista-jefe-vecinos.php">Panel Jefe Vecinos</a>';
          } elseif($rol == 3) {
            echo '<a class="nav-link" href="../Vista/vista-miembro-vecino.php">Panel Miembro Vecino</a>';
          }
          echo '<a class="nav-link" href="../Controlador/controlador-cerrar-sesion.php">Cerrar sesión</a>';
        } else {
          echo '<a class="nav-link" href="../Vista/principal.php">Login</a>';
        }
        ?>
      </div>
    </div>
  </div>
</nav>
</header>

<section class="container my-4">
    <?php while ($m2 = $mostrar2->fetch_assoc()) { ?>
     <article class="p-4 border rounded bg-light shadow-sm">
        <div class="text-muted mb-2">
          <?php echo $m2['fecha_publicacion']; ?> |
          Publicado por: <strong><?php echo $m2['primer_nombre'] . ' ' . $m2['ape_paterno']; ?></strong>
        </div>
        <h2><?php echo htmlspecialchars($m2['titulo']); ?></h2>
        <img src="<?php echo htmlspecialchars($m2['imagen']); ?>" alt="Imagen de la noticia" style="max-width: 300px;" class="img-fluid my-3">
        <p><?php echo nl2br(htmlspecialchars($m2['contenido'])); ?></p>
    </article>
    <?php } ?>

    <div class="mt-4">
        <a href="../Vista/index.php" class="btn btn-secondary">Volver al inicio</a>
    </div>
</section>

<?php
if (isset($_SESSION['id_usuario']) && isset($_SESSION['id_rol']) && ($_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2)) {
?>
<!-- Botones de acción (Editar y Publicar) -->
<div class="text-center my-4">
    <!-- Botón Editar Noticia -->
    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalEditarNoticia">
        Editar Noticia
    </button>

    <!-- Botón Publicar Nueva Noticia -->
    <a href="../Vista/vista-crear-noticia.php" class="btn btn-success">
        Publicar Nueva Noticia
    </a>
</div>

<!-- Modal Bootstrap para editar noticia -->
<div class="modal fade" id="modalEditarNoticia" tabindex="-1" aria-labelledby="modalEditarNoticiaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarNoticiaLabel">Editar Noticia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <?php include("vista-editar-noticia.php"); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
