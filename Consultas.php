<?php  session_start();

include("conexion.php");

if ($_SESSION["acceso"]!=1){
  header("Location: iniciarsesion.php");
}

	$where = "";
	
	if( isset( $_POST['campo'] ) && !empty( $_POST['campo'] ) ) {
		$where = "WHERE nombre LIKE '%" . $_POST['campo'] . "%' OR nombre LIKE '%" . $_POST['campo'] . "%'";
	}
	$sql = "SELECT * FROM estudiante $where";
  $resultado = $conexion->query( $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>FUENTE DEL SABER</title>
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/colegio.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

  <style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
  
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>

<style>
.btn-group .button {
  display: block;
  
}

.desc{
  font-family: "Times New Roman", Times, serif;
  font-weight: bold;
  text-shadow: 2px 1px purple;
   font-size: 25px;
}
h1{
   
   font-family: "Times New Roman", Times, serif;
   text-shadow: 2px 1px purple; 
   font-size: 50px;
}


</style>

<body>
<center>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
              
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="imagenes/one.jpg" alt="Niños" width="40%" height="40%">
                  </div>
              
                  <div class="item">
                    <img src="imagenes/dos.jpg" alt="Niños" width="40%" height="40%">
                  </div>
              
                  <div class="item">
                    <img src="imagenes/tres.jpg" alt="Niños" width="40%" height="40%">
                  </div>
              
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </center>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id='cssmenu' id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="Index.php">Inicio</a></li>
          <li><a href="#">Consultas</a></li>
          <li><a href="#">Reportes</a></li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="crearusuario.php">Nuevo Usuario</a></li>
            <li><a href="cambiarclave.php">Cambiar Contraseña</a></li>
          </ul>
       </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
        </ul>
        </div>
      </div>
    </div>
  </nav>


  <div class="container-fluid text-center">
 
      <fieldset>
      
        <h1 class="container-fluid text-center">Consultas </h1> <br>
        

   <div class="gallery" aling="Center">
  <a href="consultaEstudiantes.php">
    <img src="imagenes/imagenesConsulta/estudiantes.png" alt="Estudiantes" width="600" height="400">
  </a>
  <div class="desc">Estudiantes</div>
</div>

<div class="gallery">
  <a href="consultaEmpleados.php">
    <img src="imagenes/imagenesConsulta/empleado.png" alt="Empleados" width="600" height="400">
  </a>
  <div class="desc">Empleados</div>
</div>

<div class="gallery">
  <a  href="horarioprofesor.php">
    <img src="imagenes/imagenesConsulta/horario.png" alt="Horario" width="600" height="400">
  </a>
  <div class="desc">Horarios</div>
</div>

<div class="gallery">
  <a href="consultaAsignaturas.php">
    <img src="imagenes/imagenesConsulta/Asignatura.png" alt="Asignaturas" width="600" height="400">
  </a>
  <div class="desc">Asignaturas</div>
</div>

<div class="gallery">
  <a href="consultaAulas.php">
    <img src="imagenes/imagenesConsulta/aula.png" alt="Aula" width="600" height="400">
  </a>
  <div class="desc">Aula</div>
</div>
     
     
   </fieldset>


</div>


</body>
</html>