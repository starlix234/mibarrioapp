<?php
require_once('../Modelo/Modelo-conexion.php');
require_once('../Modelo/Modelo-agregar-proyecto.php');

// Función para generar código único de proyecto
function generarCodigoProyecto($prefijo = 'PROJ') {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $longitudSufijo = 15; // 20 total - "PROJ-" (5 caracteres)
    $sufijo = '';

    for ($i = 0; $i < $longitudSufijo; $i++) {
        $indiceAleatorio = random_int(0, strlen($caracteres) - 1);
        $sufijo .= $caracteres[$indiceAleatorio];
    }

    return $prefijo . '-' . $sufijo;
}

// Comprobamos si viene una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Iniciamos sesión para obtener el usuario
    if (!isset($_SESSION)) session_start();

    // Variables recibidas del formulario
    $nombre_publicacion = trim($_POST['nombre_publicacion'] ?? '');
    $contenido = trim($_POST['contenido'] ?? '');
    $monto_pro = floatval($_POST['monto_pro'] ?? 0);
    $id_estado = intval($_POST['id_estado'] ?? 1);
    $id_usuario = intval($_SESSION['id_usuario'] ?? 0);
    $extracto = trim($_POST['extracto'] ?? '');

    // Generar código único
    $codigo_unico = generarCodigoProyecto();

    // Manejo de imagen
    $imagen = null;
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = time() . '_' . basename($_FILES['imagen']['name']);
        $rutaDestino = '../uploads/' . $nombreArchivo;

        // Crear carpeta si no existe
        if (!file_exists('../uploads')) {
            mkdir('../uploads', 0777, true);
        }

        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
            $imagen = $nombreArchivo; // Solo guardamos el nombre en la BD
        } else {
            error_log("Error al mover la imagen al directorio de destino.");
        }
    }

    // Insertar proyecto mediante el modelo
    $resultado = agregarProyecto($codigo_unico, $nombre_publicacion, $contenido, $monto_pro, $id_estado, $id_usuario, $extracto, $imagen, $conn);

    // Redirigir según resultado
    if ($resultado) {
        header("Location: ../Vista/vista-agregar-proyecto.php?mensaje=exito");
        exit;
    } else {
        header("Location: ../Vista/vista-agregar-proyecto.php?mensaje=error");
        exit;
    }
}
?>
