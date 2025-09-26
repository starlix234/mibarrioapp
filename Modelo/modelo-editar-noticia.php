<?php           
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_noticia = $_POST['id_noticia'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $imagen = $_FILES['imagen']['name'];

    // Lógica para actualizar la noticia en la base de datos
    // ...

    // Redirigir o mostrar un mensaje de éxito
}