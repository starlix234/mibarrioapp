<?php
include("../Modelo/Modelo-conexion.php");
include("../Modelo/Modelo-editar-noticia.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_noticia'];
    $titulo = $_POST['titulo'];
    $descripcion_corta = $_POST['descripcion_corta'];
    $contenido = $_POST['contenido'];

    // Mantener la imagen actual si no se sube una nueva
    if (isset($_FILES['nueva_imagen']) && $_FILES['nueva_imagen']['error'] == 0) {
        $imagen = '../assets/galeria/' . basename($_FILES['nueva_imagen']['name']);
        $ruta_destino = $imagen;
        move_uploaded_file($_FILES['nueva_imagen']['tmp_name'], $ruta_destino);
    } else {
        $imagen = isset($_POST['imagen_actual']) ? $_POST['imagen_actual'] : null;
    }

    $resultado = editarNoticia($conn, $id, $titulo, $descripcion_corta, $contenido, $imagen);

    if ($resultado === true) {
        echo "noticia actualizada con éxito.";
        header("Location: ../Vista/index.php");
        exit;
    } else {
        echo $resultado;
    }
}
?>
