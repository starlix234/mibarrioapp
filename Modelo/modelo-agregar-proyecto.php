
<?php
function agregarProyecto($codigo_unico, $nombre_publicacion, $contenido, $monto_pro, $id_estado, $id_usuario, $extracto, $imagen, $conn) {
    // Insertar proyecto directamente
    $stmt = $conn->prepare("INSERT INTO proyectos (codigo_unico, nombre_publicacion, contenido, monto_pro, id_estado, id_usuario, extracto, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiisss", $codigo_unico, $nombre_publicacion, $contenido, $monto_pro, $id_estado, $id_usuario, $extracto, $imagen);
    $resultado = $stmt->execute();
    $stmt->close();
    
    return $resultado;
}

?>