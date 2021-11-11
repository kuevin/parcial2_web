<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doetalle de registrost</title>
</head>
<body>
	<?php 
      	$registros = array(
		array("id"=> 1, "nombre" => "blanca", "edad" => 25, "sexo"=> "M"),
		array("id"=> 2, "nombre" => "maria", "edad" => 35, "sexo"=> "M"),
		array("id"=> 3, "nombre" => "luis", "edad" => 55, "sexo"=> "F"),
		array("id"=> 4, "nombre" => "pedro", "edad" => 19, "sexo"=> "F"),

	);
     $id = $_GET["id"] - 1;

	if (isset($_GET["id"])) {
		echo "<h1>Datos de la persona </h1><hr>";
		echo "id: ". $registros[$_GET["id"]]["id"] . "<br>";
		echo "Nombre: ". $registros[$id]["nombre"] . "<br>";
		echo "edad: ". $registros[$id]["edad"] . "<br>";
		echo "sexo: ". $registros[$id]["sexo"] . "<br>";
		
	}else{
		echo "<h1>El dato ID es requerido</h1>";
	}

	 ?>
	
</body>
</html>