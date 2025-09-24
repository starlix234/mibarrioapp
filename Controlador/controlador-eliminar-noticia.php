<?php

require_once('../Modelo/Modelo-conexion.php');
require_once('../Modelo/Modelo-eliminar-noticia.php');


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_noticia'])) {
    $id_noticia = $_POST['id_noticia'];
    $resultado = eliminarNoticia($conn, $id_noticia);

    if($resultado === true) {
        // Redirige al admin después de eliminar
        header("Location: ../Vista/vista-admin.php?msg=noticia_eliminada");
        exit;
    } else {
        // Mostrar error si algo falla
        echo "<p>Error: $resultado</p>";
    }
} else {
    echo "<p>No se recibió ID de noticia válido.</p>";
}
?>


