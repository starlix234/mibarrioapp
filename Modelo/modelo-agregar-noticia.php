<?php
function insertarNoticia($conn, $titulo, $descripcion_corta, $contenido, $imagen, $autor, $categoria, $estado)
{
    $sql = "INSERT INTO noticias 
            (titulo, descripcion_corta, contenido, imagen, fecha_publicacion, autor, categoria, estado) 
            VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en la preparación: " . $conn->error);
    }

    $stmt->bind_param("sssssss", $titulo, $descripcion_corta, $contenido, $imagen, $autor, $categoria, $estado);

    if ($stmt->execute()) {
        $insert_id = $conn->insert_id; // devolvemos el ID autogenerado
        $stmt->close();
        return $insert_id;
    } else {
        $error = "Error al insertar: " . $stmt->error;
        $stmt->close();
        return $error;
    }
}