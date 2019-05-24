<?php  session_start();

if ($_SESSION["acceso"]!=1){
  header("Location: iniciarsesion.php");
}
include("conexion.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>FUENTE DEL SABER</title>
  <link rel="stylesheet" href="css/estilo.css">
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
    background:#000;
	color:#aaa;
	text-align:center;
	font-size:10px;
	padding:5px;
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

  h3 {
  font-size: 12px;
}
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
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Index.php"><img width= "30" height="30" src="Imagenes/img/inicio.jpg" > </a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="iniciarsesion.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


</div>
<center>

<div class="container">
  <form action="registros.php?pagina=12" method="POST" name="form1">

  <div>

    <label for="fname">Nombre</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre..">
</div>
<div>
    <label for="lname">Apellido</label>
    <input type="text" id="apellido" name="apellido" placeholder="Apellido..">
</div>
<div class="container">
    <label for="country">Ciudad</label>
    <select id="ciudad" name="ciudad">
      <option value="San Francisco de Macoris">San Francisco de Macoris</option>
      <option value="Nagua">Nagua</option>
      <option value="Santiago">Santiago</option>
      <option value="Santo Domingo">Santo Domingo</option>
       <option value="Puerto Plata">Puerto Plata</option>
      <option value="La Romana">La Romana</option>
      <option value="Samana">Samana</option>
      <option value="La Vega">La Vega</option>
    </select>
</div>
<div>
   <ul> <label for="subject">Comentrario</label></ul>
   <ul> <textarea id="cometario" name="comentario" placeholder="Escriba su comentario aqui.." style="height:200px"></textarea></ul>

</div> 
    <input type="submit" value="Enviar">

  </form>
</div>
  

</div>

</center>



<footer class="container-fluid text-center">
   <h3 class= "center"> Derechos de Autor 2019. Estudiantes de Informatica UASD </h3>
</footer>




<style>
    input[type=text], select, textarea {
  width: 30%; 
  padding: 12px;  
  border: 2px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical; 
  
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 6px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: gray;
}


.container {
  border-radius: 5px;
  padding: 10px;
}



</style>


</body>
</html>