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


