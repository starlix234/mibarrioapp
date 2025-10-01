<?php include('../Controlador/controlador-iniciar-admin.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar-noticia</title>
</head>
<body>
    <h2>Agregar Noticia</h2>
    <form action="../Controlador/controlador-agregar-noticia.php" method="post" enctype="multipart/form-data" style="max-width:400px; margin:auto;">
        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" id="titulo" required><br><br>

        <label for="descripcion_corta">Descripción corta:</label><br>
        <input type="text" name="descripcion_corta" id="descripcion_corta" maxlength="100" required><br><br>

        <label for="contenido">Contenido:</label><br>
        <textarea name="contenido" id="contenido" rows="5" required></textarea><br><br>

        <label for="imagen">Imagen:</label><br>
        <input type="file" name="imagen" id="imagen" accept="image/*"><br><br>

        <input type="hidden" name="autor" id="autor" value="<?php echo $_SESSION['id_usuario']?>">

        <input type="submit" name="guardar" id="guardar" value="Guardar Noticia">
    </form>
    
</body>
</html>