<?php require_once('../Modelo/Modelo-conexion.php')?>
<?php
$sql3="SELECT * FROM usuarios WHERE id_usuario=".$_POST['id_usuario'];
$resultado3=$conn->query($sql3); 

?>