<?php 
function editarUsuario($conn, $id_usuario, $primer_nombre, $segundo_nombre, $ape_paterno, $ape_materno, $telefono, $clave, $direccion) {
    $sql = "UPDATE usuarios SET primer_nombre=?, segundo_nombre=?, ape_paterno=?, ape_materno=?, telefono=?, clave=?, direccion=? WHERE id_usuario=?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        return "Error en la preparación: " . $conn->error;
     }


    
    $stmt->bind_param("sssssssi", $primer_nombre, $segundo_nombre, $ape_paterno, $ape_materno, $telefono, $clave, $direccion, $id_usuario);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return "Error al actualizar: " . $stmt->error;
    }
    $stmt->close();
}

?>