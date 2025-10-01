<?php include('../Controlador/controlador-iniciar-admin.php')?>
<?php include("../Controlador/controlador-mostrar-usuarios.php")?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Vecino</title>
    <style>
        .formulario {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
        }
    </style>
</head>
<body>

    
<form action="../Controlador/controlador-agregar-usuario.php" method="POST" class="formulario">
    <h2>Agregar Nuevo Usuario</h2>      
    <label for="primer_nombre">Primer Nombre:</label>
    <input type="text" id="primer_nombre" name="primer_nombre" required>
    <label for="segundo_nombre">Segundo Nombre:</label>
    <input type="text" id="segundo_nombre" name="segundo_nombre">
    <label for="ape_paterno">Apellido Paterno:</label>
    <input type="text" id="ape_paterno" name="ape_paterno"required>
    <label for="ape_materno">Apellido Materno:</label>
    <input type="text" id="ape_materno" name="ape_materno">
    <label for="fecha_nac">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nac" name="fecha_nac" required>
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required>
    <label for="rut">RUT:</label>
    <input type="text" id="rut" name="rut" required>
    <label for="clave">Contraseña:</label>
    <input type="password" id="clave" name="clave" required>
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required>
    <label for="id_rol">Rol:</label>    
    
    <select id="id_rol" name="id_rol" required>
        <option value="">Seleccione un rol</option>
        <?php
        // Llenar el select con roles desde la base de datos
        $roles = $conn->query("SELECT id_rol, rol FROM roles");
        while ($rol = $roles->fetch_assoc()) {
            echo '<option value="' . $rol['id_rol'] . '">' . htmlspecialchars($rol['rol']) . '</option>';
        }
        ?>
    </select><br><br>
    <input type="submit" id="registrar" name="registrar" class="boton-registro" value="Registrar Usuario"><br><br>
        
</form>

<script src="validador-edad-rut.js"></script>

</body>
</html>




</a>

