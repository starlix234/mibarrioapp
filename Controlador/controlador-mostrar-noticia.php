<?php require("../Modelo/Modelo-conexion.php")?>
<?php include("../Modelo/Modelo-mostrar-noticia.php")?>
<?php
  $mostrar=$conn->query($consulta); 
  $filas=$mostrar->num_rows;
?>
   