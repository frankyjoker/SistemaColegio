<?php  session_start();

if ($_SESSION["acceso"]!=1){
  header("Location: iniciarsesion.php");
}
include("conexion.php");


	$where = "";
	
	if( isset( $_POST['campo'] ) && !empty( $_POST['campo'] ) ) {
		$where = "WHERE nombre LIKE '%" . $_POST['campo'] . "%' OR apellido LIKE '%" . $_POST['campo'] . "%'";
	}
$sql = "SELECT * FROM estudiante $where";
$resultado = $conexion->query( $sql);

$cod= isset( $_GET["cod"] )? $_GET["cod"]: null;
$opera = isset( $_GET["operacion"]) ? $_GET["operacion"]: null;



if ($opera==1){
  
  $codigoasignatura = $_POST['codigoasignatura'];
  $codigohorariosemestral = $cod;
	$codigoaula = $_POST['codigoaula'];
  $horaentrada = $_POST['horaentrada'];
  $horasalida = $_POST['horasalida'];
	$dias = isset($_POST['dias']) ? $_POST['dias'] : null;
	
	$arrayDias = null;
	
	$num_array = count($dias);
	$contador = 0;
	
	if($num_array>0){
		foreach ($dias as $key => $value) {
			if ($contador != $num_array-1){
			$arrayDias .= $value.' ';
			$contador++;
			} else {
			$arrayDias .= $value;
			}
		}
	}
	
	$sql = "INSERT INTO horarioprofesor (codigohorariosemestral, codigoasignatura, codigoaula, horaentrada, horasalida, dias) VALUES ('$cod','$codigoasignatura', '$codigoaula', '$horaentrada', '$horasalida', '$arrayDias')";
	$resultado = $conexion->query( $sql);
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
  </style>
</head>

<body>



<form class="form-horizontal" action="detallehorario.php?operacion=1&cod=<?php echo $cod ?>" method="POST" name="form1"> 

   <!-- Text input-->
   <div class="form-group">
      <label class="col-md-1 control-label" for="asignatura">Asignatura</label>  
      <div class="col-md-1">
        <select id="codigoasignatura" name="codigoasignatura">
            <?php
                    $sql = "SELECT * FROM asignatura";
                    $resultado = $conexion->query( $sql);

                    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
                        
                        echo   ' <option value="'.$row['codigo'].'">'.$row['nombre'].'</option>';       
                    }
            ?>               
        </select> 
      </div>

       <label class="col-md-1 control-label" for="aula">Aula</label>  
      <div class="col-md-1">
        <select id="codigoaula" name="codigoaula">
            <?php
                    $sql = "SELECT * FROM aula";
                    $resultado = $conexion->query( $sql);

                    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
                        
                        echo   ' <option value="'.$row['codigo'].'">'.$row['descripcion'].'</option>';       
                    }
            ?>               
        </select> 

      </div>
      </div>
      
     <!-- Text input-->
     <div class="form-group">
        <label class="col-md-3 control-label" for="horaentrada">Hora Entrada</label>  
        <div class="col-md-2">
            <input id="horaentrada" name="horaentrada" type="time"  class="form-control input-md" value="08:00" >
        </div>

        <label class="col-md-2 control-label" for="horasalida">Hora Salida</label>  
        <div class="col-md-2">
            <input id="horasalida" name="horasalida" type="time"  class="form-control input-md" value="10:00" >
        </div>            
        
    </div>
    

<div class="form-group">
					<label for="dias" class="col-sm-1 control-label">Dias</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="dias[]" name="dias[]" value="lunes" checked> Lunes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="dias[]" name="dias[]" value="martes"> Martes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="dias[]" name="dias[]" value="miercoles"> Miercoles
						</label>

            <label class="checkbox-inline">
							<input type="checkbox" id="dias[]" name="dias[]"  value="jueves"> Jueves
						</label>

            <label class="checkbox-inline">
							<input type="checkbox" id="dias[]" name="dias[]" value="viernes"> Viernes
						</label>
            
				</div>

    </div>

 <!-- Text input-->
 <div class="form-group"> 
        <div class="col-md-2">
        <button id="" name="" class="btn btn-success">Agregar</button>
        </div>
 </div>      
    </form>

    <div class="container-fluid text-left">
        <div id="contenedorTabla" ></div>
      </div>

    <!-- Modal -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
        </div>

        <div class="modal-body">
          ¿Desea eliminar este registro?
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger btn-ok">Delete</a>
        </div>
      </div>
    </div>
  </div>
  

<?php  
	$sql = "SELECT * FROM horarioprofesor,asignatura,aula where horarioprofesor.codigoasignatura=asignatura.codigo and horarioprofesor.codigoaula=aula.codigo and    codigohorariosemestral=".$cod;
  $resultado = $conexion->query( $sql);
?>
<table class="table table-striped">
					<thead>
						<tr>
							<th></th>
							<th>Asignatura</th>
							<th>Aula</th>
							<th>Hora Entrada</th>
              <th>Hora Salida</th>
              <th>Dias</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
            <?php
            $total=0;
            $cant=0;
            while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { 
              $inicial= date("H",strtotime($row['horaentrada']));
              $final= date("H",strtotime($row['horasalida']));
              $cant=$cant+1;        
              $total=$total+($final-$inicial);
              ?>
							<tr>
								<td></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['descripcion']; ?></td>
								<td><?php echo $row['horaentrada']; ?></td>
                <td><?php echo $row['horasalida']; ?></td>
                <td><?php echo $row['dias']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>



						<?php } ?>

            	<tr>
								<td></td>
								<td>TOTAL ASIGNATURA</td>
								<td></td>
								<td><?php echo $cant ?></td>
                <td></td>
                <td></td>
								<td>TOTAL HORAS</td>
								<td><?php echo $total ?></td>
							</tr>             


					</tbody>
				</table>



   </fieldset>
</body>
</html>