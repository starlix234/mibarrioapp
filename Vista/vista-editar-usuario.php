
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<?php include('../Controlador/controlador-iniciar-admin.php')?>
<?php include("../Controlador/controlador-mostrar-usuarios.php")?>
<body> 
    <?php while($fila=$lista_usuarios->fetch_assoc()) { ?>
    <form action="../Controlador/controlador-editar-usuario.php" method="POST" enctype="formulario">
        <h2>Editar Usuario</h2>
        <input type="text" name="id_usuario" value="<?php echo htmlspecialchars($fila['id_usuario'])?>">
        <label for="primer_nombre">Primer Nombre:</label>
        <textarea type="text" id="primer_nombre" name="primer_nombre" required><?php echo htmlspecialchars($fila['primer_nombre'])?></textarea>    
        <label for="segundo_nombre">Segundo Nombre:</label>
        <textarea id="segundo_nombre" name="segundo_nombre"><?php echo htmlspecialchars($fila['segundo_nombre']); ?></textarea>
        <label for="ape_paterno">Apellido Paterno:</label>
        <textarea id="ape_paterno" name="ape_paterno" required><?php echo htmlspecialchars($fila['ape_paterno']); ?></textarea>
        <label for="ape_materno">Apellido Materno:</label>
        <textarea id="ape_materno" name="ape_materno"><?php echo htmlspecialchars($fila['ape_materno']); ?></textarea>
        <label for="telefono">Teléfono:</label> 
        <textarea id="telefono" name="telefono" required><?php echo htmlspecialchars($fila['telefono']); ?></textarea>
        <label for="clave">Contraseña:</label>
        <textarea id="clave" name="clave" required><?php echo htmlspecialchars($fila['clave']); ?></textarea>
        <label for="direccion">Dirección:</label>
        <textarea id="direccion" name="direccion" required><?php echo htmlspecialchars($fila['direccion']); ?></textarea>
        <button type="submit">Guardar Cambios</button>
    </form>
    <?php } ?>
</body>
</html>