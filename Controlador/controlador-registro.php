<?php
require_once('../Modelo/Modelo-conexion.php');
require_once('../Modelo/Modelo-registro.php');

// Recibir datos del formulario
$primer_nombre  = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$ape_paterno    = $_POST['ape_paterno'];
$ape_materno    = $_POST['ape_materno'];
$fecha_nac      = $_POST['fecha_nac'];
$telefono       = $_POST['telefono'];
$clave          = $_POST['clave'];
$rut            = $_POST['rut'];
$direccion      = $_POST['direccion'];

// Validar si el RUT existe
$sql_check = "SELECT COUNT(*) AS total FROM usuarios WHERE rut = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $rut);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row['total'] > 0) {
    echo "El RUT ya está registrado.";
} else {
    if (insertarUsuario($conn, $primer_nombre, $segundo_nombre, $ape_paterno, $ape_materno, $fecha_nac, $telefono, $clave, $rut, $direccion)) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error al registrar usuario.";
    }
}

$conn->close();
?>






