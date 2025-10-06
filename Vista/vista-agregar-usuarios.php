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
	<form action="" method="POST">
		<label for="primer_nombre">Nombre:</label>
		<input type="text" name="primer_nombre" id="primer_nombre" required><br>

		<label for="segundo_nombre">Segundo Nombre:</label>
		<input type="text" name="segundo_nombre" id="segundo_nombre"><br>

		<label for="ape_paterno">Apellido Paterno:</label>
		<input type="text" name="ape_paterno" id="ape_paterno" required><br>

		<label for="ape_materno">Apellido Materno:</label>
		<input type="text" name="ape_materno" id="ape_materno"><br>

		<label for="rut">RUT:</label>
		<input type="text" name="rut" id="rut" required><br>

		<label for="correo">Correo:</label>
		<input type="email" name="correo" id="correo" required><br>

		<label for="telefono">Teléfono:</label>
		<input type="text" name="telefono" id="telefono"><br>

		<label for="direccion">Dirección:</label>
		<input type="text" name="direccion" id="direccion"><br>

		<label for="foto">Foto (URL):</label>
		<input type="text" name="foto" id="foto"><br>

		<label for="id_rol">Rol:</label>
		<select name="id_rol" id="id_rol" required>
			<option value="2">Jefe de Vecinos</option>
			<option value="3">Miembro Vecino</option>
			<option value="1">Administrador</option>
		</select><br>

		<button type="submit">Agregar Usuario</button>
	</form>
</body>
</html>
