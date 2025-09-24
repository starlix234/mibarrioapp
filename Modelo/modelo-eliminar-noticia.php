<?php
function eliminarNoticia($conn, $id_noticia) {
    if(!is_numeric($id_noticia)) {
        return "ID de noticia inválido.";
    }

    $sql = "DELETE FROM noticias WHERE id_noticia = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        return "Error en la preparación de la consulta: " . $conn->error;
    }

    $stmt->bind_param("i", $id_noticia);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $error = "Error al eliminar la noticia: " . $stmt->error;
        $stmt->close();
        return $error;
    }
}
?>
