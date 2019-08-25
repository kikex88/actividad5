<?php include "operaciones.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div>
		<h1>Valores de las variables</h1>

		<div class="variables">
			<h3>variable1: <?php echo $variable1 ?></h3>
			<h3>variable2: <?php echo $variable2 ?></h3>
			<h3>variable3: <?php echo $variable3 ?></h3>
			<h3>variable4: <?php echo $variable4 ?></h3>
		</div>
	</div>
	<div>
		<h1>Operaciones</h1>

		<div class="operaciones">
			<h3>Suma: <?php echo $suma; ?></h3>
			<h3>Resta: <?php echo $resta; ?></h3>
			<h3>División: <?php echo $division; ?></h3>
			<h3>Multiplicación: <?php echo $multiplicacion; ?></h3>
		</div>
	</div>
</body>
</html>