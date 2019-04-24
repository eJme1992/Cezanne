<?php

function conectar(){

$dsn = 'localhost';
$nombre_usuario = 'root';
$contraseña = '';
$BD = "eventos";
$con = mysqli_connect($dsn, $nombre_usuario, $contraseña,$BD);
if (!$con){
	die("connection failed:". mysqli_connect_error());	
}
return $con; 
}
?>