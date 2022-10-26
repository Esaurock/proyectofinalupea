<?php 

require('config.php');

$usuario = $_POST['usuario'];
$contra = $_POST['contra'];


$sql = "SELECT COUNT(*) as contar , id_rol FROM usuario WHERE usuario = '$usuario' AND contra = '$contra'";

$consulta = mysqli_query($link,$sql);

$array = mysqli_fetch_array($consulta);

$rol = $array['idrol'];

if ($array['contar'] > 0) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['rol'] = $rol; 

	$query = "INSERT INTO `sesiones`(`nombre_sesion`) VALUES ('$usuario')";
	$cadena = mysqli_query($link,$query);
	if($cadena) echo 'exito';
	header("Location: registrar.php");

} else{

	$_SESSION['message'] = 'Error de usuario y contraseña';
	
	header('Location: index.php') ;
}

?>