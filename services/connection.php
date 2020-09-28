<?php
$host="localhost";
$user="root";
$pass="";
$db="reread";
//crear la conexion
    $conexion=mysqli_connect($host, $user, $pass, $db);
    
// CHECKEAR LA CONEXION
if (!$conexion) {
	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
	exit;
}else {
	mysqli_set_charset($conexion, "utf8");
}
	?>