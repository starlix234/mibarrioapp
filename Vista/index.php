<?php
session_start();
include('../Controlador/controlador-mostrar-noticia.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Barrio</title>
    <link rel="stylesheet" href="../assets/css/estilo.css">
</head>

<body>
 <svg width="0" height="0" style="position:absolute;">
        <defs>
            <clipPath id="wavy-clip" clipPathUnits="objectBoundingBox">
                <path d="M 0,0 H 1 V 0.8 C 0.75,1 0.25,1 0,0.8 Z" />
            </clipPath>
        </defs>
    </svg>

    <?php include("vista-menu.php"); ?>

<main>
<section class="hero">       
             <div class="hero-image-container">
                <img src="../assets/img/fondo_montanas_1.jpg" alt="Ilustración de un jardín natural con hojas verdes">
            </div>
                 <div class="hero-content ">
                <h1>Bienvenidos a Barrio App</h1>
                <p class="negro">Su comunidad Importa</p>
                </div>
</section>
<section class="circular-cards-section">
   
    <div class="container">
    <h2>Noticias de la comunidad</h2>
    <p>En esta sección descubre lo nuevo del barrio</p>

    <?php if (isset($_SESSION['id_usuario'])): ?>
        <?php $rol = $_SESSION['id_rol'] ?? null; ?>

        <?php if ($rol == 1 || $rol == 2): ?>
            <div class="text-end mb-3">
                <a href="vista-agregar-noticia.php" class="purple-button">Publicar noticia</a>
            </div>
        <?php endif; ?>

        <div class="cards-grid">
            <?php while ($m = $mostrar->fetch_assoc()): ?>
                <div class="circular-card">
                    <div class="card-image-container">
                        <img src="<?php echo htmlspecialchars($m['imagen'] ?? 'https://via.placeholder.com/300'); ?>" alt="Imagen de noticia">
                    </div>

                    <h3><?php echo htmlspecialchars($m['titulo']); ?></h3>
                    <p><?php echo htmlspecialchars($m['descripcion_corta']); ?></p>

                    <a href="../vista/vista-interior-noticia.php?id=<?php echo $m['id_noticia']; ?>" class="purple-button">Leer Más</a>

                    <?php if ($rol == 1 || $rol == 2): ?>
                        <div class="admin-actions">
                            <a href="../vista/vista-editar-noticia.php?id=<?php echo $m['id_noticia']; ?>" class="purple-button">Editar</a>
                            <form action="../Controlador/controlador-eliminar-noticia.php" method="post" class="d-inline" onsubmit="return confirm('¿Desea eliminar esta noticia?');">
                                <input type="hidden" name="id_noticia" value="<?php echo $m['id_noticia']; ?>">
                                <button type="submit" class="purple-button">Eliminar</button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>

    <?php else: ?>
        <div class="cards-grid">
            <?php while ($m = $mostrar->fetch_assoc()): ?>
                <div class="circular-card">
                    <div class="card-image-container">
                        <img src="<?php echo htmlspecialchars($m['imagen_url'] ?? 'https://via.placeholder.com/300'); ?>" alt="Imagen de noticia">
                    </div>

                    <h3><?php echo htmlspecialchars($m['titulo']); ?></h3>
                    <p><?php echo htmlspecialchars($m['descripcion_corta']); ?></p>

                    <a href="../vista/vista-interior-noticia.php?id=<?php echo $m['id_noticia']; ?>" class="purple-button">Leer Más</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>

    
</section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
