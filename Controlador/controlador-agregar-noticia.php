<?php
require_once('../Modelo/Modelo-conexion.php');
require_once('../Modelo/Modelo-agregar-noticia.php');

// Recibir datos del formulario (con seguridad, sanitización sugerida)
$titulo            = $_POST['titulo'];
$descripcion_corta = $_POST['descripcion_corta'];
$contenido         = $_POST['contenido'];
$imagen            = $_POST['imagen'];
$autor             = $_POST['autor'];

// Llamada al modelo
$resultado = insertarNoticia($conn, $titulo, $descripcion_corta, $contenido, $imagen, $autor);

// Respuesta
if (is_numeric($resultado)) {
    echo "Noticia insertada correctamente con ID: " . $resultado;
} else {
    echo $resultado; // mensaje de error
}
