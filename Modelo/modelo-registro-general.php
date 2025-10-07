<?php
function agregarUsuario(
    $primer_nombre,
    $segundo_nombre,
    $ape_paterno,
    $ape_materno,
    $fecha_nac,
    $telefono,
    $clave,
    $id_rol,
    $rut,
    $direccion,
    $foto,
    $correo,
    $conn
) {
    // Validar si el RUT o correo ya existen
    $stmt_check = $conn->prepare("SELECT id_usuario FROM usuarios WHERE rut = ? OR correo = ?");
    $stmt_check->bind_param("ss", $rut, $correo);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        $stmt_check->close();
        return 'existe'; // RUT o correo ya registrados
    }
    $stmt_check->close();

    // Encriptar la clave
    $clave_hash = password_hash($clave, PASSWORD_DEFAULT);

    // Insertar usuario
    $stmt = $conn->prepare("
        INSERT INTO usuarios 
        (primer_nombre, segundo_nombre, ape_paterno, ape_materno, fecha_nac, telefono, clave, id_rol, rut, direccion, foto, correo)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "ssssssssssss",
        $primer_nombre,
        $segundo_nombre,
        $ape_paterno,
        $ape_materno,
        $fecha_nac,
        $telefono,
        $clave_hash,
        $id_rol,
        $rut,
        $direccion,
        $foto,
        $correo
    );

    $resultado = $stmt->execute();
    $stmt->close();

    return $resultado;
}
?>
