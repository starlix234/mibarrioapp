<?php
if(!isset($_SESSION)) session_start();
if($_SESSION['id_rol']!=1 ){
	header('Location:../Vista/index.php');
}

?>