<?php require_once("../modelo/Modelo-conexion.php"); ?>
<?php include("../modelo/modelo-eliminar-usuario.php");?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_usuario'])) {
    $id_usuario = $_POST['id_usuario'];

    // Vincular el parámetro y ejecutar la consulta
    $eliminarUsuario->bind_param("i", $id_usuario);
    if ($eliminarUsuario->execute()) {
        // Redirigir de vuelta al panel de administración después de eliminar
        header("Location: ../Vista/vista-Panel-admin.php");
        exit();
    } else {
        echo "Error al eliminar el usuario: " . $eliminarUsuario->error;
    }
} else {
    echo "ID de usuario no proporcionado.";
}