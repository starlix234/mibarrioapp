<?php
require_once('../Modelo/Modelo-conexion.php');
//consultadno estados  de la tabla 
$est="select * from estados";
$result = $conn->query($est);
?>