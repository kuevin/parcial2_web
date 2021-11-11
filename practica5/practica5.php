<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 5. intercambio de variable en php</title>
</head>
<body>
	<?php 

	$registros = array(
		array("id"=> 1, "nombre" => "blanca", "edad" => 25, "sexo"=> "M"),
		array("id"=> 2, "nombre" => "maria", "edad" => 35, "sexo"=> "M"),
		array("id"=> 3, "nombre" => "luis", "edad" => 55, "sexo"=> "F"),
		array("id"=> 4, "nombre" => "pedro", "edad" => 19, "sexo"=> "F"),

	);

	 ?>

	 <h1>Tabla de registros</h1><hr>
	 
	 <table border=1>
	 	<thead>
	 		<tr>
	 			<td>id</td>
	 			<td>Nombre</td>
	 			<td>Edad</td>
	 			<td>Sexo</td>
	 			<td>Detalle</td>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php 
              for ($i=0; $i < count($registros) ; $i++) { 

              	echo "<tr>";
              	    echo "<td>". $registros[$i]["id"]."</td>";
              	    echo "<td>". $registros[$i]["nombre"]."</td>";
              	    echo "<td>". $registros[$i]["edad"]."</td>";
              	    echo "<td>". $registros[$i]["sexo"]."</td>";
              	    echo "<td> <a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>ver detalle</a></td>";
              	echo "</tr>";

              	
              }

	 		 ?>
	 		 <h1> Kevin Alejandro Garcia Inzunza </h1>
	 	</tbody>
	 </table>
</body>
</html>