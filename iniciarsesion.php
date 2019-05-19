<?php
  require('conexion.php');
  
  session_start();
  session_destroy(); 

  

  if(isset($_SESSION["codigousuario"])){
    

    header("Location: inicio.php");
  }
  
  if(!empty($_POST))
  {
    $usuario = mysqli_real_escape_string($conexion,$_POST['usuario']);
    $password = mysqli_real_escape_string($conexion,$_POST['password']);
    
    $consulta = "SELECT codigo FROM usuario WHERE nombreusuario = '$usuario' AND claveusuario = '$password'";
    $result=$conexion->query($consulta);
    $rows = $result->num_rows;
    $_SESSION["acceso"] = 0;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      session_start();
      $_SESSION['codigousuario'] = $row['codigo'];
      $_SESSION["acceso"] = 1;
      header("location: inicio.php");
      } else {
      echo "<script> alert('El Usuario o La Contraseña NO estan digitados correctamente!!!') </script>";
    }
  }
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

    h2{
      color:blue;
    }
    
    h1{
      color:yellow;
      background-color:#555;
    }

    p{
      line-height: 1.5; 
      font-weight: bold;
      font-style: Arial;
      text-transform: capitalize; 
      text-align:justify;
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
      <div class="collapse navbar-collapse" id='cssmenu' id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="Index.php"><img width="30" height="30" src="imagenes/img/inicio.jpg"></a></li>
          <li><a href="#"> Contacto</a></li>
       </ul>
        </div>
      </div>
    </div>
  </nav>
  
<div class="container-fluid text-center">    
    <fieldset>
    <img  src="Imagenes/sesion.png" width="250" height="250"  alt="Iniciar Sesión">
    </br>
    <form class="form-horizontal"  action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-5 control-label" for="usuario">Usuario</label>  
            <div class="col-md-3">
                <input id="usuario" name="usuario" type="text" placeholder="Usuario" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
             <label class="col-md-5 control-label" for="nombre">Contraseña</label>  
          <div class="col-md-3">
             <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md" required="">
          </div>
        </div> 

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-4">
             <button id="login" name="login" class="btn btn-success" value="Iniciar Sesión">Entrar</button>
             <a href="index.php" class="btn btn-primary">Salir</a>
          </div>
        </div>

   </form> 
</fieldset>
    </div>
      <hr>
    </div>
  </div>
</div>

</body>
</html>
