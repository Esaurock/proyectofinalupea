<?php 
include("config.php");
$id_usuario = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id_usuario='$id_usuario'";
$query = mysqli_query($link,$sql);

	if($query){
		Header("Location: registrar.php");
	}
 ?>