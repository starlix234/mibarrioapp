<?php
function insertarUsuario($conn, $primer_nombre, $segundo_nombre, $ape_paterno, $ape_materno, $fecha_nac, $telefono, $clave, $rut, $direccion) {
    $sql = "INSERT INTO usuarios 
            (primer_nombre, segundo_nombre, ape_paterno, ape_materno, fecha_nac, telefono, clave, id_rol, rut, direccion) 
            VALUES (?, ?, ?, ?, ?, ?, ?, 3, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $primer_nombre, $segundo_nombre, $ape_paterno, $ape_materno, $fecha_nac, $telefono, $clave, $rut, $direccion);
    
    return $stmt->execute();
}
?>
<?php
function InsertarUsuarioAdmin($conn, $primer_nombre, $segundo_nombre, $ape_paterno, $ape_materno, $fecha_nac, $telefono, $clave, $id_rol, $rut, $direccion) {
    $sql = "INSERT INTO usuarios 
            (primer_nombre, segundo_nombre, ape_paterno, ape_materno, fecha_nac, telefono, clave, id_rol, rut, direccion) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    // Si id_rol es un número entero → usamos 'i', si no, todo 's'
    $stmt->bind_param("ssssssssis", 
        $primer_nombre,
        $segundo_nombre,
        $ape_paterno,
        $ape_materno,
        $fecha_nac,
        $telefono,
        $clave,
        $id_rol,
        $rut,
        $direccion
    );

    // Ejecutar y verificar resultado
    if (!$stmt->execute()) {
        die("Error al ejecutar la consulta: " . $stmt->error);
    }

    return true;
}
?>
