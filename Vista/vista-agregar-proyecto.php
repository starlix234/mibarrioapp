<?php include("../modelo/modelo-seleccionar-estado.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Poryectos</title>
</head>
<body>

<form action="../Controlador/controlador-agregar-proyecto.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre_publicacion" placeholder="Nombre del proyecto" required>
    <textarea name="contenido" placeholder="Descripción del proyecto" required></textarea>
    <input type="number" step="0.01" name="monto_pro" placeholder="Monto del proyecto" required>
    <input type="text" name="extracto" placeholder="Extracto">
    <label for="id_estado" class="form-label">Estado del proyecto:</label>
    <select name="id_estado" id="id_estado" class="form-select" required>
        <option value="">Seleccione un estado...</option>
        <?php
        if ($result && $result->num_rows > 0) {
            while ($fila = $result->fetch_assoc()) {
                echo '<option value="' . htmlspecialchars($fila['id_estado']) . '">' . htmlspecialchars($fila['estado']) . '</option>';
            }
        } else {
            echo '<option value="">No hay estados disponibles</option>';
        }
        ?>
    </select>
    <input type="file" name="imagen" accept="image/*">
    <button type="submit">Guardar Proyecto</button>
</form>



</body>
</html>