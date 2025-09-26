<?php require("../Modelo/Modelo-conexion.php"); ?>
<?php
// Obtener el id de la noticia desde la URL
$id_noticia = isset($_GET['id']) ? intval($_GET['id']) : null;
include("../Modelo/Modelo-mostrar-noticia.php");

// Solo ejecutar la consulta si $id_noticia tiene valor
if ($id_noticia !== null && $id_noticia > 0) {
    $mostrar2 = $conn->query($consulta2);
    $filas2 = $mostrar2->num_rows;
} else {
    $mostrar2 = false;
    $filas2 = 0;
}

// Consulta general (todas las noticias)
$mostrar = $conn->query($consulta);
$filas = $mostrar->num_rows;
?>
