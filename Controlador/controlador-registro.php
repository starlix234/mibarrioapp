<?php 
// llamar librerías
require_once('../Modelo/Modelo-conexion.php');
include('../Modelo/Modelo-registro.php');
// Ejecutar consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar: " . $conn->error;
}


?>












