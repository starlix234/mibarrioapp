<?php include('../Controlador/controlador-mostrar-noticia.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto con Bootstrap</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <header>
   <section>
   
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-menu">
  <div class="container-fluid">
 <img class="navbar-brand logo" src="https://media.discordapp.net/attachments/1414711851052175562/1420250981538599032/image.png?ex=68d4b74c&is=68d365cc&hm=f2095593ee7af9d84317ba9cc43cd57f56fedd1cf37c6a0fecccdbdf082955d7&=&format=webp&quality=lossless">

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link" href="#">Inicio</a>
        <a class="nav-link" href="#">Postulaciones</a>
        <a class="nav-link" href="#">Certificado</a>
        <a class="nav-link" href="../Vista/principal.php">Login</a>



      </div>
    </div>
  </div>
</nav>

   </section>

    </header>
    


    <main>
    <section class="centrar">
    <div class="row justify-content-center p-4 tarjeta">
<?php 
while($m = $mostrar->fetch_assoc()){ 
?>
    <div class="col-md-4 mb-4"> <!-- Cada card ocupa 4 columnas, puedes ajustar -->
        <div class="card shadow-lg h-100">
            <img src="<?php echo $m['imagen']; ?>" class="card-img-top" alt="Imagen de <?php echo htmlspecialchars($m['titulo']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo date("F d, Y", strtotime($m['fecha_publicacion'])); ?></h5>
                <h6><?php echo htmlspecialchars($m['titulo']); ?></h6>
                <p class="card-text"><?php echo htmlspecialchars($m['descripcion_corta']); ?></p>
                <p class="text-muted">Por: <?php echo htmlspecialchars($m['primer_nombre'] . " " . $m['segundo_nombre'] . " " . $m['ape_paterno']); ?></p>
                 <a href="" class="boton">Leer mas</a>
            </div>
        </div>
    </div>
<?php 
}
?>
</div>
</section>
 </main>
  






    <!-- Bootstrap JS + Popper.js desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>