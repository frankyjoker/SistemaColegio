<?php

$nombreDeHost = "localhost";
$nombreDeUsuario = "root";
$password = "";
$baseDeDatos = "basecolegio";

$conexion = new mysqli($nombreDeHost, $nombreDeUsuario, $password, $baseDeDatos);
if ($conexion->connect_error){
	die( "Error de conexion.<br> Lo sentimos, pero no fue posible completar la tarea solicitada. El mensaje de error obtenido fue: " . $conexion->connect_error);
}

?>