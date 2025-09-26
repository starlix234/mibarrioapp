<?php include('../Controlador/controlador-iniciar-jefe-vecinos.php')?>
<?php include("../Controlador/controlador-mostrar-noticia.php")?>
<link rel="stylesheet" href="../assets/css/noticia-completa.css">

<?php
if ($filas > 0) {
    $noticia = $mostrar->fetch_assoc();
    ?>
    <main class="noticia-container">
        <article class="noticia">
            <header class="noticia-header">
                <h1 class="noticia-titulo"><?php echo htmlspecialchars($noticia['titulo']); ?></h1>
                <div class="noticia-meta">
                    <span class="noticia-autor">Por <?php echo htmlspecialchars($noticia['primer_nombre'] . ' ' . $noticia['ape_paterno']); ?></span>
                    <span class="noticia-fecha"><?php echo date('d/m/Y', strtotime($noticia['fecha_publicacion'])); ?></span>
                </div>
            </header>
            <figure class="noticia-imagen">
                <img src="../assets/img/<?php echo htmlspecialchars($noticia['imagen']); ?>" alt="Imagen de la noticia">
                <figcaption><?php echo htmlspecialchars($noticia['descripcion_corta']); ?></figcaption>
            </figure>
            <section class="noticia-contenido">
                <p><?php echo nl2br(htmlspecialchars($noticia['contenido'])); ?></p>
                <!-- Puedes agregar aquí más detalles, citas, etc. -->
            </section>
        </article>
    </main>
    <?php
} else {
    echo '<p>No se encontró la noticia solicitada.</p>';
}
?>

Hola soy un Jefe Junta de Vecinos <a href="../Controlador/controlador-cerrar-sesion.php">Adios</a>

