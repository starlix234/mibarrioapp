<?php 
require_once('../Modelo/Modelo-conexion.php');
include('../Modelo/Modelo-editar-usuarios.php');

// Ejecutar consulta 
if ($conn->query($sql) === TRUE) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar: " . $conn->error;
}
?>