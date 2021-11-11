<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Practica 2</title>
</head>
<body>
	<?php 
    $numero= rand(1,4);
    $color = ["#36f443", "#f44336", "#bdfcff", "#fff5bc"];
    $numcolor= rand(0,3);
    echo "Numero generado = ". $numero . "<br>";
    echo "<div style='color:".$color[$numcolor]."'> color generado </div>";
    if ($numero == 1) {
    	
    ?>
    <h1 style="color: <?php  echo $color[$numcolor]; ?>">Titulo de la pagina 1</h1>
    <?php  }  elseif ($numero == 2) {?>
    	<h2 style="color: <?php  echo $color[$numcolor]; ?>">Titulo 2</h2>
    <?php } elseif ($numero == 3) {?>
     <h3 style="color: <?php  echo $color[$numcolor]; ?>"> Titulo 3 de la pagina</h3>
    <?php } else {?>
    	<h4 style="color: <?php  echo $color[$numcolor]; ?>">Titulo 4 de la pagina</h4>
    <?php } ?>
    <h1>Kevin Alejandro Garcia Inzunza </h1>
</body>
</html>