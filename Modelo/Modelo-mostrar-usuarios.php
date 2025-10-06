<?php 

//codigo de consular usuarios logeados
    $id=$_SESSION['id_usuario'];
    $sql="select * from usuarios where id_usuario=$id";    
    //consulta para mostrar datos del usuarios con tipo de rol 2 y tres 3
    $sql2="SELECT u.id_usuario,
u.primer_nombre,
u.segundo_nombre,
u.ape_paterno,
u.ape_materno,
u.fecha_nac,
u.telefono,
u.clave,
r.rol,
u.rut,
u.direccion,
u.foto,
u.id_rol
from usuarios u JOIN roles r on 
r.id_rol=u.id_rol
WHERE r.id_rol IN (2, 3);";



?>

