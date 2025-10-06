<?php

function agregarUsuarioAdmin($primer_nombre, $ape_paterno, $rut, $foto, $id_rol, $conn) {
	// Validar si el rut ya existe
	$stmt_check = $conn->prepare("SELECT id_usuario FROM usuarios WHERE rut = ?");
	$stmt_check->bind_param("s", $rut);
	$stmt_check->execute();
	$stmt_check->store_result();
	if ($stmt_check->num_rows > 0) {
		$stmt_check->close();
		return 'existe'; // Rut ya registrado
	}
	$stmt_check->close();

	// Insertar usuario si el rut no existe
	$stmt = $conn->prepare("INSERT INTO usuarios (primer_nombre, ape_paterno, rut, foto, id_rol) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssi", $primer_nombre, $ape_paterno, $rut, $foto, $id_rol);
	$resultado = $stmt->execute();
	$stmt->close();
	return $resultado;
}

?>
