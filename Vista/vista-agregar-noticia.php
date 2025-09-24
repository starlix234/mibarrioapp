
<?php include('../Controlador/controlador-iniciar-admin.php');
 ;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar-noticia</title>
</head>
<body>
    <form action="../Controlador/controlador-agregar-noticia.php" method="post">
    <input type="text" name="titulo" id="titulo">
    <input type="text" name="descripcion_corta" id="descripcion_corta">
    <input type="text" name="contenido" id="contenido">
    <input type="text" name="imagen" id="imagen">
    <input type="hidden" name="autor" id="autor" value="<?php echo $_SESSION['id_usuario']?> ">
    <input type="submit" name="guardar" id="guardar">
    </form>
    
</body>
</html>