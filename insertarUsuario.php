<?php 
require('config.php');

$nombre = $_POST['nombre'];
$ci = $_POST["ci"];
$cel = $_POST["cel"];
$dir = $_POST["dir"];
$usu = $_POST["usu"];
$contra = $_POST["contra"];
$cargo = $_POST["rol"];


$sql = "INSERT INTO `usuario`(`id_usuario`, `id_rol`, `nombre_completo`, `ci`, `celular`,`direccion`,`usuario`,`contra`) 
    VALUES (null,'$cargo','$nombre','$ci','$cel','$dir','$usu','$contra')"; 
$query = mysqli_query($link,$sql);


if($query){
	Header("Location: registrar.php");
}else{
 // Header("Location: index.php");
}
mysqli_close($link);
?>