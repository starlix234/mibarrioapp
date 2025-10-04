<?php 
require_once('../Modelo/Modelo-conexion.php');
include('../Modelo/Modelo-editar-usuarios.php');

// Ejecutar consulta 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST['id_usuario'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $ape_paterno = $_POST['ape_paterno'];
    $ape_materno = $_POST['ape_materno'];
    $telefono = $_POST['telefono'];
    $clave = $_POST['clave'];
    $direccion = $_POST['direccion'];

    
    $resultado = editarUsuario($conexion,
     $id_usuario, 
     $primer_nombre, 
     $segundo_nombre,
      $ape_paterno, 
      $ape_materno, 
      $telefono, 
      $clave, 
      $direccion);
      if ($resultado === true) {
        echo "Usuario actualizado con éxito.";
        header("Location: ../Vista/index.php");
        exit;} else {
        echo $resultado;}
}


?>