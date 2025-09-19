
<?php
// Recibir datos del formulario
$primer_nombre  = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$ape_paterno    = $_POST['ape_paterno'];
$ape_materno    = $_POST['ape_materno'];
$fecha_nac      = $_POST['fecha_nac'];
$telefono       = $_POST['telefono'];
$clave          = $_POST['clave'];
$rut            = $_POST['rut'];
$direccion      = $_POST['direccion'];

// Consulta con variables
$sql = "INSERT INTO `usuarios` 
(`id_usuario`, `primer_nombre`, `segundo_nombre`, `ape_paterno`, `ape_materno`, `fecha_nac`, `telefono`, `clave`, `id_rol`, `rut`, `direccion`) 
VALUES (NULL, '$primer_nombre', '$segundo_nombre', '$ape_paterno', '$ape_materno', '$fecha_nac', '$telefono', '$clave', 3, '$rut', '$direccion')";
?>






