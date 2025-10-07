<?php
session_start(); // Iniciar sesión

require_once("../modelo/Modelo-conexion.php");
require_once("../modelo/modelo-registro-general.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Capturar datos del formulario
    $primer_nombre = trim($_POST['primer_nombre'] ?? '');
    $segundo_nombre = trim($_POST['segundo_nombre'] ?? '');
    $ape_paterno = trim($_POST['ape_paterno'] ?? '');
    $ape_materno = trim($_POST['ape_materno'] ?? '');
    $fecha_nac = trim($_POST['fecha_nac'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $clave = trim($_POST['clave'] ?? '');
    $rut = trim($_POST['rut'] ?? '');
    $direccion = trim($_POST['direccion'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $id_rol = 3; // Rol fijo: Miembro Vecino

    // Manejo de foto
    $foto = null;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = time() . '_' . basename($_FILES['foto']['name']);
        $rutaDestino = '../uploads/' . $nombreArchivo;

        if (!file_exists('../uploads')) mkdir('../uploads', 0777, true);

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino)) {
            $foto = $nombreArchivo;
        }
    }

    // Llamar al modelo para registrar
    $resultado = agregarUsuario(
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
    );

    if ($resultado === 'existe') {
        header("Location: ../Vista/index.php?mensaje=existe");
        exit;
    } elseif ($resultado) {
        // Registro exitoso → iniciar sesión automáticamente
        $usuarioId = $conn->insert_id; // Obtener id_usuario insertado
        $_SESSION['id_usuario'] = $usuarioId;
        $_SESSION['primer_nombre'] = $primer_nombre;
        $_SESSION['id_rol'] = $id_rol;

        // Redirigir al index
        header("Location: ../index.php");
        exit;
    } else {
        echo "error al registrar sus datos";
    }
}
?>
