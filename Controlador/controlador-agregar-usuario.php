
<?php require_once('../Modelo/Modelo-conexion.php');
include("../Modelo/modelo-agregar-usuario-admin.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$primer_nombre = $_POST['primer_nombre'] ?? '';
	$ape_paterno = $_POST['ape_paterno'] ?? '';
	$rut = $_POST['rut'] ?? '';
	$foto = $_POST['foto'] ?? '';
	$id_rol = $_POST['id_rol'] ?? 2; // Por defecto rol 2 si no se envía

	$resultado = agregarUsuarioAdmin($primer_nombre, $ape_paterno, $rut, $foto, $id_rol, $conn);

	if ($resultado === true) {
		echo "Usuario agregado correctamente.";
		// Redireccionar o mostrar mensaje
	} elseif ($resultado === 'existe') {
		echo "El RUT ya está registrado.";
	} else {
		echo "Error al agregar usuario.";
	}
}
