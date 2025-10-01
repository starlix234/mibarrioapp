
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <frorm action="../Controlador/controlador-editar-usuario.php" method="POST" class="formulario">
        <h2>Editar Usuario</h2>
        <label for="primer_nombre">Primer Nombre:</label>
        <input type="text" id="primer_nombre" name="primer_nombre" required>    
        <label for="segundo_nombre">Segundo Nombre:</label>
        <input type="text" id="segundo_nombre" name="segundo_nombre">    
        <label for="ape_paterno">Apellido Paterno:</label>
        <input type="text" id="ape_paterno" name="ape_paterno" required>
        <label for="ape_materno">Apellido Materno:</label>
        <input type="text" id="ape_materno" name="ape_materno">
        <label for="telefono">Teléfono:</label> 
        <input type="tel" id="telefono" name="telefono" required>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <input type="submit" id="editar" name="editar" class="boton-registro" value="editar"><br><br>  
    </frorm>
</body>
</html>