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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<header>
    <?php include("vista-menu.php"); ?>
    <h1>Bienvenidos a mi Barrio de vecinos</h1>
</header>

<main>
<section class="contenedor-general">
    <?php
    if (isset($_SESSION['id_usuario'])) {
        $rol = $_SESSION['id_rol'] ?? null;

        while ($m = $mostrar->fetch_assoc()) { ?>
            <article class="mb-4 p-3 border rounded shadow-sm bg-light">
                <h2><?php echo htmlspecialchars($m['titulo']); ?></h2>
                <p><?php echo htmlspecialchars($m['descripcion_corta']); ?></p>

                <a href="../vista/vista-interior-noticia.php?id=<?php echo $m['id_noticia']; ?>" class="btn btn-info">Leer más</a>

                <?php if ($rol == 1 || $rol == 2): ?>
                    <!-- Botón Editar -->
                    <a href="../vista/vista-editar-noticia.php?id=<?php echo $m['id_noticia']; ?>" class="btn btn-warning">Editar</a>

                    <!-- Botón Eliminar -->
                    <form action="../Controlador/controlador-eliminar-noticia.php" method="post" class="d-inline" onsubmit="return confirm('¿Desea eliminar esta noticia?');">
                        <input type="hidden" name="id_noticia" value="<?php echo $m['id_noticia']; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                <?php endif; ?>
            </article>
        <?php }
    } else {

 while ($m = $mostrar->fetch_assoc()) { ?>
            <article class="mb-4 p-3 border rounded shadow-sm bg-light">
                <h2><?php echo htmlspecialchars($m['titulo']); ?></h2>
                <p><?php echo htmlspecialchars($m['descripcion_corta']); ?></p>

                <a href="../vista/vista-interior-noticia.php?id=<?php echo $m['id_noticia']; ?>" class="btn btn-info">Leer más</a>
                 </article>
        <?php }
    }
    ?>
</section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
