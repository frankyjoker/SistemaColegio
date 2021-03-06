<?php  session_start();

if ($_SESSION["acceso"]!=1){
  header("Location: iniciarsesion.php");
}

include("conexion.php");

	$codigo = $_GET["codigo"];
	
	$sql = "SELECT * FROM empleado WHERE codigo = '$codigo'";
  $resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
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
</head>
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
    <div class="collapse navbar-collapse" id="myNavbar">
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
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-left"> 
    <h1 class="container-fluid text-center">Modificar Empleado</h1> <br>
      <hr>
      
<fieldset>

  <form class="form-horizontal" action="registros.php?pagina=4" method="POST" name="form1"> 

  <input type="hidden" id="codigo" name="codigo" value="<?php echo $row["codigo"]; ?>" />

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="nombre">Nombre</label>  
      <div class="col-md-4">
      <input id="nombre" name="nombre" type="text" placeholder="Ingresar un Nombre" class="form-control input-md" value= <?php echo $row['nombre']; ?> required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="apellido">Apellido</label>  
      <div class="col-md-4">
      <input id="apellido" name="apellido" type="text" placeholder="Ingresar un Apellido" class="form-control input-md" value= <?php echo $row['apellido']; ?> required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="direccion">Dirección</label>  
      <div class="col-md-4">
      <input id="direccion" name="direccion" type="text" placeholder="" class="form-control input-md" value= <?php echo $row['direccion']; ?>  required="">
        
      </div>
    </div>

      <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cedula">Cedula</label>  
      <div class="col-md-4">
      <input id="cedula" name="cedula" type="text" placeholder="" class="form-control input-md" value= <?php echo $row['cedula']; ?>  required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="telefono">Telefono</label>  
      <div class="col-md-4">
      <input id="telefono" name="telefono" type="tel" placeholder="Telefono" class="form-control input-md" value= <?php echo $row['telefono']; ?>  required="" >
        
      </div>
    </div>

     <!-- Text input-->
     <div class="form-group">
      <label class="col-md-4 control-label" for="puesto">Posición o Puesto</label>  
      <div class="col-md-4">
      <input id="puesto" name="puesto" type="text" placeholder="Posición o Puesto" class="form-control input-md" value= <?php echo $row['puesto']; ?>  required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="fechaInicio">Fecha Inicio</label>  
      <div class="col-md-4">
      <input id="fechaInicio" name="fechaInicio" type="date" placeholder="Fecha Inicio" class="form-control input-md" value= <?php echo $row['fechaInicio']; ?> required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sueldo">Sueldo</label>  
      <div class="col-md-4">
      <input id="sueldo" name="sueldo" type="text" placeholder="Sueldo" class="form-control input-md" value= <?php echo $row['sueldo']; ?> required="" >
        
      </div>
    </div>
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <button id="" name="" class="btn btn-success">Guardar</button>
        <a href="consultaEmpleados.php" class="btn btn-primary">Regresar</a>
      </div>
    </div>
    </form>
    </fieldset>
  
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
   <p> Footer..... </p>
</footer>

</body>
</html>
