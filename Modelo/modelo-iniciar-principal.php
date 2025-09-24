<?php
//consulta en sql de usuarios segun el nivel de permiso
$id = $_SESSION['id_usuario'];
$sql = "SELECT primer_nombre, ape_paterno, id_rol FROM usuarios WHERE id_usuario = ?";
?>