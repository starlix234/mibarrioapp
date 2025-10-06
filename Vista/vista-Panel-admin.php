<?php include("../Controlador/controlador-mostrar-usuarios.php")?>
<?php include('../Controlador/controlador-iniciar-admin.php')?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administración</title>
</head>
<body>
<h2>Bienvenido al panel de administración</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>RUT</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Foto</th>
            <th>Rol</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while($usuario = $lista_usuarios->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $usuario['id_usuario']; ?></td>
                <td><?php echo htmlspecialchars($usuario['primer_nombre']); ?></td>
                <td><?php echo htmlspecialchars($usuario['segundo_nombre']); ?></td>
                <td><?php echo htmlspecialchars($usuario['ape_paterno']); ?></td>
                <td><?php echo htmlspecialchars($usuario['ape_materno']); ?></td>
                <td><?php echo htmlspecialchars($usuario['rut']); ?></td>
                <td><?php echo htmlspecialchars($usuario['telefono']); ?></td>
                <td><?php echo htmlspecialchars($usuario['direccion']); ?></td>
                <td><img src="<?php echo htmlspecialchars($usuario['foto']); ?>" alt="Foto" width="50"></td>
                <td><?php echo $usuario['rol']; ?></td>
                <td>
                    <form action="../Vista/vista-editar-usuario.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">
                        <input type="hidden" name="primer_nombre" value="<?php echo htmlspecialchars($usuario['primer_nombre']); ?>">
                        <input type="hidden" name="segundo_nombre" value="<?php echo htmlspecialchars($usuario['segundo_nombre']); ?>">
                        <input type="hidden" name="ape_paterno" value="<?php echo htmlspecialchars($usuario['ape_paterno']); ?>">
                        <input type="hidden" name="ape_materno" value="<?php echo htmlspecialchars($usuario['ape_materno']); ?>">
                        <input type="hidden" name="rut" value="<?php echo htmlspecialchars($usuario['rut']); ?>">
                        <input type="hidden" name="telefono" value="<?php echo htmlspecialchars($usuario['telefono']); ?>">
                        <input type="hidden" name="direccion" value="<?php echo htmlspecialchars($usuario['direccion']); ?>">
                        <input type="hidden" name="foto" value="<?php echo htmlspecialchars($usuario['foto']); ?>">
                        <input type="hidden" name="id_rol" value="<?php echo $usuario['id_rol']; ?>">
                        <button type="submit">Editar</button>
                    </form>
                    <form action="../Controlador/controlador-eliminar-usuario.php" method="POST" style="display:inline;" onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?');">
                        <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>