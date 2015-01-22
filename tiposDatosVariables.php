<!DOCTYPE html>
<html lang="es">
<!--1. Definir una variable de cada tipo: integer, double, string y boolean, array y null.
2. Luego imprimirlas en la página una por línea mediante la función var_dump()-->
	<head>
		<title>Tipos de datos en variables</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h1>Tipo de datos en variables </h1>
		<?php
			$entero=5;
			$decimal=3.5;
			$cadena="Hola, ¿que tal? ";
			$booleana=false;
			$listado=["Laura", "Nerea", "Lucas"];
			$variableNula;
			var_dump($entero,$decimal,$cadena,$booleana,$listado,$variableNula);	
			//crear una constante
			define('FIRMADO',"Cristina");
			echo FIRMADO;
		?>
	</body>
</html>
