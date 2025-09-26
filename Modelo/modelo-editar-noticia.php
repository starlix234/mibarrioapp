<?php
function editarNoticia($conexion, $id, $titulo, $descripcion_corta, $contenido, $imagen) {
    $sql = "UPDATE noticias 
            SET titulo = ?, descripcion_corta = ?, contenido = ?, imagen = ?
            WHERE id_noticia = ?";

    $stmt = $conexion->prepare($sql);
    if (!$stmt) {
        return "Error en la preparación: " . $conexion->error;
    }

    $stmt->bind_param("ssssi", $titulo, $descripcion_corta, $contenido, $imagen, $id);

    if ($stmt->execute()) {
        return true;
    } else {
        return "Error al actualizar: " . $stmt->error;
    }

    $stmt->close();
}
?>
