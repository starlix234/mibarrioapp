<?php 
session_start();

$id = $_SESSION['id_usuario'];//obtengo el id del usuario que se logueo

// Recibir datos del formulario
$id_usuario     = $_POST[$id];// ID del usuario a actualizar
$primer_nombre  = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$ape_paterno    = $_POST['ape_paterno'];
$ape_materno    = $_POST['ape_materno'];
$telefono       = $_POST['telefono'];
$clave          = $_POST['clave']; 
$direccion      = $_POST['direccion'];



// Consulta con variables
$sql = "UPDATE usuarios SET primer_nombre=?, segundo_nombre=?, ape_paterno=?, ape_materno=?, telefono=?, clave=?, direccion=? WHERE id_usuario=?";
$stmt = $this->conn->prepare($sql);
$stmt->bind_param('sssssssi',
$primer_nombre,
$segundo_nombre, 
$ape_paterno, 
$ape_materno, 
$telefono, 
$clave, 
$direccion, 
$id_usuario);
$stmt->execute();

?>