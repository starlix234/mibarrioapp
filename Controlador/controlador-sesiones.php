<?php require('../Modelo/Modelo-conexion.php');?>
<?php if(!isset($_SESSION))session_start();?>
<?php
	if((isset($_POST['rut']) && $_POST['rut']<>"") && (isset($_POST['clave']) && $_POST['clave']<>"") ){
	    $query="SELECT * FROM usuarios WHERE 1 AND rut='$_POST[rut]' AND clave='$_POST[clave]'";
		$resource=$conn->query($query);
		if($t=$resource->num_rows){
		$row=$resource->fetch_assoc();
        $_SESSION['id_usuario']=$row['id_usuario'];
		$_SESSION['primer_nombre']=$row['primer_nombre'];
        $_SESSION['segundo_nombre']=$row['segundo_nombre'];
        $_SESSION['ape_paterno']=$row['ape_paterno'];
        $_SESSION['ape_materno']=$row['ape_materno'];
        $_SESSION["id_rol"]=$row['id_rol']; 
        //$_SESSION['rut']=$datos->rut; 
        //$_SESSION['telefono']=$datos->telefono;
        //$_SESSION['fecha_nac']=$datos->fecha_nac;
        //$_SESSION["id_rol"]=$datos->id_rol;
        if($row['id_rol']==1){
            header('Location:../Vista/vista-admin.php');
        }
        else{
			if($row['id_rol']==2){
                header('Location:../Vista/vista-jefe-Vecinos.php');
            }else if($row['id_rol']==3){
                    header('Location:../medico.php');               
                
            }else if($row['id_rol']==4){
                header('Location:../secretario.php');        
            }
          
            

        }
		
	}else  { 
        $error="Usuario/Clave no registrados";
        echo "<span class='error'>".$error."</span>";
        //header('Location:../vista/.php?wrong='.$error);
		
	}
}