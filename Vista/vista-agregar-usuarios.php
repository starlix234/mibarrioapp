<?php include("../Controlador/controlador-agregar-usuario.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar Usuario</title>
	<link rel="stylesheet" href="../assets/css/formulario.css">
</head>
<body>
	<h2>Agregar Usuario</h2>
	<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
</head>
<body>

<h2>Agregar Nuevo Usuario</h2>

<form action="../Controlador/controlador-agregar-usuario.php" method="POST">

    <label for="primer_nombre">Primer Nombre:</label><br>
    <input type="text" name="primer_nombre" id="primer_nombre" required><br><br>

    <label for="segundo_nombre">Segundo Nombre:</label><br>
    <input type="text" name="segundo_nombre" id="segundo_nombre" required><br><br>

    <label for="ape_paterno">Apellido Paterno:</label><br>
    <input type="text" name="ape_paterno" id="ape_paterno" required><br><br>

    <label for="ape_materno">Apellido Materno:</label><br>
    <input type="text" name="ape_materno" id="ape_materno" required><br><br>

    <label for="fecha_nac">Fecha de Nacimiento:</label><br>
    <input type="date" name="fecha_nac" id="fecha_nac" required><br><br>

    <label for="rut">RUT:</label><br>
    <input type="text" name="rut" id="rut" required><br><br>

    <label for="correo">Correo Electrónico:</label><br>
    <input type="email" name="correo" id="correo" required><br><br>

    <label for="telefono">Teléfono:</label><br>
    <input type="text" name="telefono" id="telefono" required><br><br>

    <label for="direccion">Dirección:</label><br>
    <input type="text" name="direccion" id="direccion" required><br><br>

    <label for="foto">Foto (URL):</label><br>
    <input type="text" name="foto" id="foto" required><br><br>

    <label for="clave">Contraseña:</label><br>
    <input type="password" name="clave" id="clave" required><br><br>

    <label for="id_rol">Rol:</label><br>
    <select name="id_rol" id="id_rol" required>
        <option value="" disabled selected>Seleccione un rol...</option>
        <option value="1">Administrador</option>
        <option value="2">Jefe de Vecinos</option>
        <option value="3">Miembro Vecino</option>
    </select><br><br>

    <button type="submit">Agregar Usuario</button>

</form>

</body>
</html>
