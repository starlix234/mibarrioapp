<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Vecino</title>
</head>
<body>
<form action="../Controlador/Controlador-registro.php" method="POST">
    <label for="primer_nombre">Primer Nombre:</label><br>
    <input type="text" id="primer_nombre" name="primer_nombre" required><br><br>
    
    <label for="segundo_nombre">Segundo Nombre:</label><br>
    <input type="text" id="segundo_nombre" name="segundo_nombre"><br><br>
    
    <label for="ape_paterno">Apellido Paterno:</label><br>
    <input type="text" id="ape_paterno" name="ape_paterno" required><br><br>
    
    <label for="ape_materno">Apellido Materno:</label><br>
    <input type="text" id="ape_materno" name="ape_materno"><br><br>
    
    <label for="fecha_nac">Fecha de Nacimiento:</label><br>
    <input type="date" id="fecha_nac" name="fecha_nac" required><br><br>
    
    <label for="telefono">Teléfono:</label><br>
    <input type="tel" id="telefono" name="telefono" required><br><br>
    
    <label for="rut">RUT:</label><br>
    <input type="text" id="rut" name="rut" required><br><br>
    
    <label for="clave">Contraseña:</label><br>
    <input type="password" id="clave" name="clave" required><br><br>
    
    <label for="direccion">Dirección:</label><br>
    <input type="text" id="direccion" name="direccion" required><br><br>
    <input type="submit" id="registrar" name="registrar" value="registrar">


</form>
</body>
</html>