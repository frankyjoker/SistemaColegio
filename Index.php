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

  <style>
  h1 {
  font-size: 40px;
}

h2 {
  font-size: 36px;
  text-align: center;
  text-shadow: 3px 2px green;

}

h3 {
  font-size: 12px;
  text-align: center;
}


p {
  font-family: "Monospace", Mono, Monospace;
}

#rcorners3 {
  border-radius: 15px 50px;
  border:4px solid blue;
  padding: 20px; 
  width: justify;
  height: justify;  
  font-size: 24px;
}

Table
{
 align: center;
 font-size: 100px;
 font-family: "Times New Roman", Times, serif;
  font-weight: bold;
 text-shadow: 3px 2px blue;

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
        <li><a href="Index.php"><img width= "30" height="30" src="Imagenes/img/inicio.jpg" > </a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="iniciarsesion.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left"> 

        <Table BORDER=2px blue>
        <Tr><Td>
        <MARQUEE> Colegio Fuente del Saber </MARQUEE>
        </Td></Tr>
        </Table>

      <h1 class="container-fluid text-center">BIENVENIDOS</h1>
      <h2>Misión</h2>
      <p id= "rcorners3">Educar a niños, niñas y jóvenes para que logren su desarrollo integral en las dimensiones individual, social y trascendente,
       que les facilite una inserción crítica, creativa y eficiente en la sociedad.</p>
      <h2>Visión</h2>
      <p id= "rcorners3">Ser un centro educativo reconocido por la   calidad y
       la innovación en sus estrategias pedagógicas, el desarrollo   integral de sus estudiantes y las competencias de su personal docente.</p>
      <h2>Valores</h2>
      <p id= "rcorners3">-Promover aprendizajes de calidad en niños, niñas y jóvenes para favorecer su desarrollo integral.<br>
        -Formar en los valores que se explicitan en el Evangelio.<br>
        -Favorecer la inserción crítica del   alumnado y en la comunidad local, nacional e  internacional,
         aportando   al desarrollo y transformación de la misma.<br>
        -Facilitar la formación y actualización permanente del profesorado en las áreas de su especialidad.<br>
        -Promover la integración escuela – familia para la educación del estudiantado.<br>
        -Desarrollar la identidad personal y social de los y las estudiantes. </p>
      <hr>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
   <h3 class= "center"> Derechos de Autor 2019. Estudiantes de Informatica UASD </h3>
</footer>

</body>
</html>
