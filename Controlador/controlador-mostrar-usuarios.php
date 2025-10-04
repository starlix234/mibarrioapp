<?php require_once('../Modelo/Modelo-conexion.php')?>
<?php include("../Modelo/Modelo-mostrar-usuarios.php"); 
    $mostrar=$conn->query($sql); 
    $filas=$mostrar->num_rows;

	 while($m=$mostrar->fetch_assoc()){ 
       
		echo $m['primer_nombre']."  ".$m['ape_paterno'];
        echo $m['rut'];
        echo "<img src='".$m['foto']."'>";

     }

     $lista_usuarios=$conn->query($sql2);
     $filas_usuarios=$lista_usuarios->num_rows;

?>