<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia Interior</title>
</head>
<body>
<?php include("../Controlador/controlador-mostrar-noticia.php")?>
<section>
    <?php while ($m2 = $mostrar2->fetch_assoc()) { ?>
     <article>
        <div> <?php echo $m2['fecha_publicacion']; ?> Publicado por: <?php echo $m2['primer_nombre'] . ' ' . $m2['ape_paterno']; ?></div>
        <h2><?php echo $m2['titulo']; ?></h2>
        <img src="<?php echo ($m2['imagen']); ?>" alt ="Imagen de la noticia" style="max-width: 200px;">
        <p><?php echo $m2['contenido']; ?></p>

    
    
    </article>
<?php } ?>
</section>
</body>
</html>
