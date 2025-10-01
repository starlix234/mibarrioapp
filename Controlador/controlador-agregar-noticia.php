<?php
require_once('../Modelo/Modelo-conexion.php');
require_once('../Modelo/Modelo-agregar-noticia.php');

// Recibir datos del formulario (con seguridad, sanitización sugerida)
$titulo            = $_POST['titulo'];
$descripcion_corta = $_POST['descripcion_corta'];
$contenido         = $_POST['contenido'];
$imagen_url = '';
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
    $nombreArchivo = uniqid('img_') . '_' . basename($_FILES['imagen']['name']);
    $rutaDestino = __DIR__ . '/../assets/galeria/' . $nombreArchivo;
    if (file_exists($rutaDestino)) {
        echo '<div style="color:red;">Error: La imagen ya existe en la galería.</div>';
        $imagen_url = '';
    } else if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
        $imagen_url = '../assets/galeria/' . $nombreArchivo;
    } else {
        $imagen_url = '';
    }
} else {
    $imagen_url = '';
}
$autor             = $_POST['autor'];

// Llamada al modelo
$resultado = insertarNoticia($conn, $titulo, $descripcion_corta, $contenido, $imagen_url, $autor);

// Respuesta
if (is_numeric($resultado)) {
    header('Location: ../Vista/index.php');
    exit();
} else {
    echo $resultado; // mensaje de error;
}
