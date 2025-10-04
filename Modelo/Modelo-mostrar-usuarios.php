<?php 

//codigo de consular usuarios logeados
    $id=$_SESSION['id_usuario'];
    $sql="select * from usuarios where id_usuario=$id";    
    //consulta para mostrar datos del usuarios con tipo de rol 2 y tres 3
    $sql2="SELECT * FROM usuarios WHERE id_rol IN (2, 3); ";?>