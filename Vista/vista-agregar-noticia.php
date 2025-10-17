<?php include('../Controlador/controlador-iniciar-admin.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar-noticia</title>
    <link rel="stylesheet" href="../assets/css/estilo-noticia.css"> 
    <link rel="stylesheet" href="../assets/css/estilo.css"> 
</head>
<body class="cuerpo">

 <svg width="0" height="0" style="position:absolute;">
        <defs>
            <clipPath id="wavy-clip" clipPathUnits="objectBoundingBox">
                <path d="M 0,0 H 1 V 0.8 C 0.75,1 0.25,1 0,0.8 Z" />
            </clipPath>
        </defs>
    </svg>
<?php include ("vista-menu.php")?>

<main class="color-principal">

<div class="contenedor-principal">
        <div class="seccion-imagen">
            <img src="../assets/img/barrio.jpg" alt="Fondo decorativo" class="imagen-decorativa">
            </div>
        <div class="seccion-formulario">
            <h2>Publicar Noticia Comunal</h2>
            <form action="../Controlador/controlador-agregar-noticia.php" method="post" enctype="multipart/form-data">
                <div class="grupo-campo">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" required>
                </div>

                <div class="grupo-campo">
                    <label for="descripcion_corta">Descripción corta:</label>
                    <input type="text" name="descripcion_corta" id="descripcion_corta" maxlength="100" required>
                </div>

                <div class="grupo-campo">
                    <label for="contenido">Contenido:</label>
                    <textarea name="contenido" id="contenido" rows="5" required></textarea>
                </div>

                <div class="grupo-campo">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*">
                </div>

                <input type="hidden" name="autor" id="autor" value="<?php echo $_SESSION['id_usuario']?>">

                <input type="submit" name="guardar" id="guardar" value="Guardar Noticia" class="boton-guardar">
            </form>
        </div>
    </div>
</main>
    
</body>
</html>