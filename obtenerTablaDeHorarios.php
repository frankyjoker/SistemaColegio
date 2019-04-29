<?php  session_start();

/*if ($_SESSION["acceso"]!=1){
  header("Location: iniciarsesion.php");
}*/
	include("conexion.php");
	
	$where = "";
	
  //if( isset( $_POST['campo'] ) && !empty( $_POST['campo'] ) ) {
      echo $_POST['campo'].'hhhhhhhhhhhhhhhhhhhhhhhhh';

		$where = "WHERE codigohorariosemestral =".$_POST['campo'] ;
	//}
	$sql = "SELECT * FROM horarioprofesor $where";
  $resultado = $conexion->query( $sql);
?>

<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>ID Horario Semestral</th>
        <th>ID Asignatura</th>
        <th>ID Aula</th>
        <th>Hora Entrada</th>
        <th>Hora Salida</th>
        <th>Dias</th>
        <th></th>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php 
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
    echo "<tr>";
    foreach($row as $valor ) {
    echo "<td>$valor</td>";
    }

    echo '<td><a href="modificarEstudiantes.php?codigo=' . $row['codigo'] .'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
    echo '<td><a href="#" data-href="eliminarEstudiantes.php?codigo=' . $row['codigo'] . '" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>';
    echo "</tr>";
    }
    ?>
</tbody>
</table>