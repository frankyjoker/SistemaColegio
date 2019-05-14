<?php  session_start();

if ($_SESSION["acceso"]!=1){
  header("Location: iniciarsesion.php");
}
include("conexion.php");

$pagina= $_GET["pagina"];

//Registrar Estudiantes!!!
if ($pagina==1){

	$nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $fechaNacimiento=$_POST["fechaNacimiento"];
    $correoElectronico=$_POST["correoElectronico"];
    $padre=$_POST["padre"];
    $madre=$_POST["madre"];
    
	$conexion->set_charset("utf8");

	$sql = "INSERT INTO estudiante (nombre, apellido, direccion, telefono, fechaNacimiento, correoElectronico, padre, madre)  VALUES ('$nombre','$apellido','$direccion','$telefono','$fechaNacimiento','$correoElectronico','$padre','$madre')";
	$resultado = $conexion->query($sql);
	

	echo "<script> alert('Guardado Exitosamente!!!') </script>";
	echo "<script> window.location='registroEstudiantes.php' </script>";
}

//Modificar Estudiantes!!!
if ($pagina==2){

    $codigo=$_POST["codigo"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $fechaNacimiento=$_POST["fechaNacimiento"];
    $correoElectronico=$_POST["correoElectronico"];
    $padre=$_POST["padre"];
    $madre=$_POST["madre"];
	$sql = "UPDATE estudiante SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono', fechaNacimiento='$fechaNacimiento', correoElectronico='$correoElectronico', padre='$padre', madre='$madre' WHERE codigo = '$codigo'";
    $resultado = $conexion->query($sql); 

    echo "<script> alert('Modificado Exitosamente!!!') </script>";
	echo "<script> window.location='consultaEstudiantes.php' </script>";
 }

//Registrar Empleados!!!
if ($pagina==3){
    
	$nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];
    $cedula=$_POST["cedula"];
    $telefono=$_POST["telefono"];
    $puesto=$_POST["puesto"];
    $fechaInicio=$_POST["fechaInicio"];
    $sueldo=$_POST["sueldo"];

    
	$conexion->set_charset("utf8");

	$sql = "INSERT INTO empleado (nombre, apellido, direccion, cedula, telefono, puesto, fechaInicio, sueldo)  VALUES ('$nombre','$apellido','$direccion','$cedula','$telefono','$puesto','$fechaInicio','$sueldo')";
	$resultado = $conexion->query($sql);
	

	echo "<script> alert('Guardado Exitosamente!!!') </script>";
	echo "<script> window.location='registroEmpleados.php' </script>";
}

//Modificar Empleados!!!
if ($pagina==4){

    $codigo=$_POST["codigo"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];
    $cedula=$_POST["cedula"];
    $telefono=$_POST["telefono"];
    $puesto=$_POST["puesto"];
    $fechaInicio=$_POST["fechaInicio"];
    $sueldo=$_POST["sueldo"];
    
	$sql = "UPDATE empleado SET nombre='$nombre', apellido='$apellido', direccion='$direccion', cedula='$cedula', telefono='$telefono', puesto='$puesto', fechaInicio='$fechaInicio', sueldo='$sueldo'  WHERE codigo = '$codigo'";
    $resultado = $conexion->query($sql); 

    echo "<script> alert('Modificado Exitosamente!!!') </script>";
	echo "<script> window.location='consultaEmpleados.php' </script>";
 }

 
 //Usuarios
 //Esto se usa para crear usuarios...
if ($pagina==5){

	$nombre=$_POST["campo_nombre"];
	$apellido=$_POST["campo_apellido"];
	$nombreusuario=$_POST["campo_nombreusuario"];
	$claveusuario=$_POST["campo_clave"];
	$confirmarclave=$_POST["campo_confirmarclave"];
    if ($nombre != "" && $apellido != "" && $nombreusuario != "" && $claveusuario != "" && $confirmarclave != ""){
            if ($claveusuario==$confirmarclave)   {


                        
    	        $sql = "INSERT INTO usuario(nombre, apellido, nombreusuario, claveusuario) VALUES ('$nombre','$apellido','$nombreusuario','$claveusuario')";
	            $resultado = $conexion->query($sql);

	           echo "<script> alert('Usuario Guardado Exitosamente!!!') </script>";
	           echo "<script> window.location='crearusuario.php' </script>";


             }
             else{
               echo "<script> alert('La Clave y la Confirmacion No Coinciden') </script>";
               echo "<script> history.go(-1); </script>";
	         }

	      }
	//echo "<script> alert('Entrada Exitosa') </script>";
}
//Esto se usa para cambiar clave a el usuario.
if ($pagina==6){

	$nombreusuario=$_POST["campo_nombreusuario"];
	$claveactual=$_POST["campo_claveactual"];
	$clavenueva=$_POST["campo_nuevaclave"];
	$campo_confirmarnuevaclave=$_POST["campo_confirmarnuevaclave"];


	$consulta = "SELECT * FROM usuario WHERE nombreusuario ='".$nombreusuario."'";
    $resultado = $conexion->query($consulta);
    
    $registroActual = $resultado->fetch_assoc();
    $user = $registroActual["nombreusuario"];
    $pass = $registroActual["claveusuario"];
    $codigo = $registroActual["codigo"];

   
if ($user!= ""){

if ($pass==$claveactual){


  

    if ($nombreusuario != "" && $claveactual != "" && $clavenueva != "" && $campo_confirmarnuevaclave != ""){
            if ($clavenueva==$campo_confirmarnuevaclave)   {
                        
    	        $sql = "UPDATE usuario SET claveusuario = $clavenueva WHERE codigo =$codigo";
	            $resultado = $conexion->query($sql);

	           echo "<script> alert('Contraseña Cambiada Exitosamente!!!') </script>";
	           echo "<script> window.location='cambiarclave.php' </script>";


             }
             else{
		       echo "<script> alert('La Clave y la Confirmacion No Coinciden') </script>";
		       echo "<script> history.go(-1); </script>";
	         }
	



	      }
	else{
		echo "<script> alert('Debes completar todos los campos') </script>";
		echo "<script> history.go(-1); </script>";
	  }
	



}
else{
		echo "<script> alert('La contraseña actual no pertenece al usuario') </script>";
		echo "<script> history.go(-1); </script>";
	  }



}

else{
		echo "<script> alert('El Usuario no fue encontrado en la Base de Datos') </script>";
		echo "<script> history.go(-1); </script>";
	  }




	echo "<script> history.go(-1); </script>";
	echo "<script> alert('Entrada Exitosa') </script>";
}

if ($pagina==7){

	$codigoprofesor = $_POST['codigoprofesor'];
	$anioescolar = $_POST['anioescolar'];

	
	$sql = "INSERT INTO horariosemestral (codigoprofesor, anioescolar) VALUES ('$codigoprofesor', '$anioescolar')";
	$resultado = $conexion->query($sql);

	$codigo=mysqli_insert_id($conexion);
	echo ' <form class="form-horizontal" action="horarioprofesor.php?cod='.$codigo.'" method="POST" name="form1" id="form1"> ';
	echo '<script>
	     document.getElementById("form1").submit();
	 </script>';

	echo '</form>';
	//echo "<script> alert('Guardado Exitosamente!!!') </script>";
	//echo "<script> window.location='horarioprofesor.php' </script>";
}

//Registrar Asignaturas!!!
if ($pagina==8){

	$nombre=$_POST["nombre"];
	$cantidad=$_POST["cantidad"];
	
	$conexion->set_charset("utf8");

	$sql = "INSERT INTO asignatura (nombre, cantidad)  VALUES ('$nombre','$cantidad')";
	$resultado = $conexion->query($sql);
	

	echo "<script> alert('Guardado Exitosamente!!!') </script>";
	echo "<script> window.location='registroAsignaturas.php' </script>";
}

//Modificar Asignaturas!!!
if ($pagina==9){

    $codigo=$_POST["codigo"];
    $nombre=$_POST["nombre"];
	$cantidad=$_POST["cantidad"];
    
	$sql = "UPDATE asignatura SET nombre='$nombre', cantidad='$cantidad' WHERE codigo = '$codigo'";
    $resultado = $conexion->query($sql); 

    echo "<script> alert('Modificado Exitosamente!!!') </script>";
	echo "<script> window.location='consultaAsignaturas.php' </script>";
 }

 //Registrar Aulas!!!
if ($pagina==10){

	$descripcion=$_POST["descripcion"];
	
	$conexion->set_charset("utf8");

	$sql = "INSERT INTO aula (descripcion)  VALUES ('$descripcion')";
	$resultado = $conexion->query($sql);
	

	echo "<script> alert('Guardado Exitosamente!!!') </script>";
	echo "<script> window.location='registroAulas.php' </script>";
}

//Modificar Asignaturas!!!
if ($pagina==11){

    $codigo=$_POST["codigo"];
    $descripcion=$_POST["descripcion"];
    
	$sql = "UPDATE aula SET descripcion='$descripcion' WHERE codigo = '$codigo'";
    $resultado = $conexion->query($sql); 

    echo "<script> alert('Modificado Exitosamente!!!') </script>";
	echo "<script> window.location='consultaAulas.php' </script>";
 }

?>