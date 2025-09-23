<?php 

//codigo de consular usuarios
    $id=$_SESSION['id_usuario'];
    $sql="select * from usuarios where id_usuario=$id";    
  
?>