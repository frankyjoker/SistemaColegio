<?php
	include("conexion.php");

	$id = $_GET['codigo'];
	$sql = "DELETE FROM asignatura WHERE codigo = '$id'";
	$resultado = $conexion->query($sql);

	echo "<script> alert('Eliminado Exitosamente!!!') </script>";
	echo "<script> window.location='consultaAsignaturas.php' </script>";
	
?>