<?php
if(!isset($_SESSION)) session_start();
if($_SESSION['id_rol']!=3 ){
	header('Location:../Vista/index.php');
}

?>