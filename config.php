<?php 

$dbhost = "localhost"; // Servidor
$dbuser = "root"; // Usuario
$dbpass = ""; // Contraseña
$dbname = "proyectofinal"; // nombre db


// Creando conexion.// fuera de uso
$link = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname)or die ("No se ha podido conectar al servidor de datos");

 ?>