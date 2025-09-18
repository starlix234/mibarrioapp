<?php
$servidor = "localhost";
$usuario = "vecino";
$clave = "1234";
$basedatos = "mibarrio";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $clave, $basedatos);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Aquí NO cerramos la conexión
?>
