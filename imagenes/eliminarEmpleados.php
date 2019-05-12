<?php
	include("conexion.php");

	$id = $_GET['codigo'];
	$sql = "DELETE FROM empleados  WHERE codigo = '$id'";
	$resultado = $conexion->query($sql);

	echo "<script> alert('Eliminado Exitosamente!!!') </script>";
	echo "<script> window.location='consultaEmpleado.php' </script>";
	
?>
 