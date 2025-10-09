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
    try { 
        // Validar si el RUT o correo ya existen
        $sql_check = "SELECT id_usuario FROM usuarios WHERE rut = ? OR correo = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("ss", $rut, $correo);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            return "El RUT o el correo ya están registrados.";
        }

        $stmt_check->close();

        // Insertar nuevo usuario (sin encriptar la clave)
        $sql = "INSERT INTO usuarios (
                    primer_nombre,
                    segundo_nombre,
                    ape_paterno,
                    ape_materno,
                    fecha_nac,
                    telefono,
                    clave,
                    id_rol,
                    rut,
                    direccion,
                    foto,
                    correo
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "ssssssssssss",
            $primer_nombre,
            $segundo_nombre,
            $ape_paterno,
            $ape_materno,
            $fecha_nac,
            $telefono,
            $clave,   // SIN HASH
            $id_rol,
            $rut,
            $direccion,
            $foto,
            $correo
        );

        if ($stmt->execute()) {
            return true;
        } else {
            return "Error al insertar: " . $stmt->error;
        }

    } catch (Exception $e) {
        return "Excepción: " . $e->getMessage();
    }
}
?>