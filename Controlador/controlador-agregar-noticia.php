<?php
require_once('../Modelo/Modelo-conexion.php');
require_once('../Modelo/Modelo-agregar-noticia.php');

// Recibir datos del formulario (con seguridad, sanitización sugerida)
$titulo            = $_POST['titulo'];
$descripcion_corta = $_POST['descripcion_corta'];
$contenido         = $_POST['contenido'];
$imagen            = $_POST['imagen'];
$autor             = $_POST['autor'];
$categoria         = $_POST['categoria'];
$estado            = $_POST['estado'];

// Llamada al modelo
$resultado = insertarNoticia($conn, $titulo, $descripcion_corta, $contenido, $imagen, $autor, $categoria, $estado);

// Respuesta
if (is_numeric($resultado)) {
    echo "Noticia insertada correctamente con ID: " . $resultado;
} else {
    echo $resultado; // mensaje de error
}
