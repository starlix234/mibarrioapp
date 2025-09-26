<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include("../Controlador/controlador-mostrar-noticia.php")?>
<body>

<?php while ($fila2 = $mostrar2->fetch_assoc()) { ?>
    <form action="../Controlador/controlador-editar-noticia.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_noticia" value="<?php echo htmlspecialchars($fila2['id_noticia']); ?>">
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($fila2['titulo']); ?>" required>
        
        <label for="descripcion_corta">Descripción Corta:</label>
        <textarea id="descripcion_corta" name="descripcion_corta" required><?php echo htmlspecialchars($fila2['descripcion_corta']); ?></textarea>
        
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" required><?php echo htmlspecialchars($fila2['contenido']); ?></textarea>
        
        <label for="imagen">Imagen Actual:</label>
        <img src="../assets/img/<?php echo htmlspecialchars($fila2['imagen']); ?>" alt="Imagen de la noticia" style="max-width: 200px;">
        
        <label for="nueva_imagen">Cambiar Imagen:</label>
        <input type="file" id="nueva_imagen" name="nueva_imagen">
        
        <button type="submit">Guardar Cambios</button>
    </form>
<?php } ?>
</body>
</html>