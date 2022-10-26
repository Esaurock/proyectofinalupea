<?php 
include ("config.php");

$id_usuario = $_POST['id_usuario'];
$id_rol = $_POST["rol"];
$nombre = $_POST["nombre"];
$ci = $_POST["ci"];
$cel = $_POST["cel"];
$dir = $_POST["dir"];
$usu = $_POST["usuario"];
$contra = $_POST["contra"];

$sql = "UPDATE `usuario` SET `id_rol`='$i_drol',`nombres`='$nombre',`ci`='$ci',`celular`='$cel',`direccion`='$dir',`usuario`='$usu',`contra`='$contra'WHERE `id_usuario`='$id_usuario' ";


$query = mysqli_query($link,$sql);

if($query){
	Header("Location: registrar.php");
}

?>