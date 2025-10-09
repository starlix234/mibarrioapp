<?php require("../modelo/modelo-conexion.php")?>
<?php require("../modelo/modelo-agregar-usuario-admin.php")?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $primer_nombre = trim($_POST['primer_nombre'] ?? '');
    $segundo_nombre = trim($_POST['segundo_nombre'] ?? '');
    $ape_paterno = trim($_POST['ape_paterno'] ?? '');
    $ape_materno = trim($_POST['ape_materno'] ?? '');
    $fecha_nac = trim($_POST['fecha_nac'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $clave = trim($_POST['clave'] ?? '');
    $id_rol = trim($_POST['id_rol'] ?? '');
    $rut = trim($_POST['rut'] ?? '');
    $direccion = trim($_POST['direccion'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $foto = '';

    // Manejar carga de imagen si existe
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $nombreFoto = uniqid() . "_" . basename($_FILES['foto']['name']);
        $rutaDestino = "../uploads/" . $nombreFoto;
        move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino);
        $foto = $nombreFoto;
    }

    $resultado = agregarUsuario(
        $primer_nombre,
        $segundo_nombre,
        $ape_paterno,
        $ape_materno,
        $fecha_nac,
        $telefono,
        $clave,      // SIN HASH
        $id_rol,
        $rut,
        $direccion,
        $foto,
        $correo,
        $conn
    );

    if ($resultado === true) {
        header("Location: ../Vista/index.php?mensaje=usuario_creado");
        exit;
    } else {
        echo "<script>alert('Error: $resultado'); window.history.back();</script>";
    }
}




?>