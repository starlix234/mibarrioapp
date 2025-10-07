<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/formulario.css">
    <title>Registro Vecino</title>
</head>
<body>

<h2>Registro Vecino</h2>

<form action="../Controlador/Controlador-registro-general.php" method="POST" class="formulario" enctype="multipart/form-data">
    
    <label for="primer_nombre">Primer Nombre:</label>
    <input type="text" id="primer_nombre" name="primer_nombre" required>    

    <label for="segundo_nombre">Segundo Nombre:</label>|
    <input type="text" id="segundo_nombre" name="segundo_nombre" required>    

    <label for="ape_paterno">Apellido Paterno:</label>
    <input type="text" id="ape_paterno" name="ape_paterno" required>    

    <label for="ape_materno">Apellido Materno:</label>
    <input type="text" id="ape_materno" name="ape_materno" required>    

    <label for="fecha_nac">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nac" name="fecha_nac" required>    

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required>    

    <label for="rut">RUT:</label>
    <input type="text" id="rut" name="rut" required>    

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" required>    

    <label for="clave">Contraseña:</label>
    <input type="password" id="clave" name="clave" required>    

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required>    

    <label for="foto">Foto:</label>
    <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

    <button type="submit">Registrar</button>
</form>

<script src="validador-edad-rut.js"></script>

</body>
</html>
