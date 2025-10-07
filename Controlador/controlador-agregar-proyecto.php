<?php
require_once('../Modelo/Modelo-conexion.php');
require_once('../Modelo/Modelo-agregar-proyecto.php');

function generarCodigoProyecto($prefijo = 'PROJ') {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $longitudSufijo = 15; // 20 total - "PROJ-" (5 caracteres)
    $sufijo = '';
    
    for ($i = 0; $i < $longitudSufijo; $i++) {
        $indiceAleatorio = random_int(0, strlen($caracteres) - 1);
        $sufijo .= $caracteres[$indiceAleatorio];
    }
    
    return $prefijo . '-' . $sufijo;
}






?>