<?php
//consulta de noticias
$consulta="select n.id_noticia,u.primer_nombre,
 u.segundo_nombre, u.ape_paterno, u.ape_materno, 
 n.titulo, n.descripcion_corta, n.contenido, n.imagen,
 n.fecha_publicacion, u.foto from usuarios u join noticias
 n on u.id_usuario=n.autor;"; 


$consulta2="select n.id_noticia,u.primer_nombre,
 u.segundo_nombre, u.ape_paterno, u.ape_materno, 
 n.titulo, n.descripcion_corta, n.contenido, n.imagen,
 n.fecha_publicacion, u.foto from usuarios u join noticias
 n on u.id_usuario=n.autor where n.id_noticia = $id_noticia;";





?>
