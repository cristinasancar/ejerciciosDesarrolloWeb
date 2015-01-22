<!DOCTYPE html>
<html lang="es">
<!--Definir una contante con la función define
Definir una constante con la palabra reservado const
Crear una constante con define y que de igual que la llamemos en mayúsculas y en minúsculas
Crear un string largo e imprimirlo en pantalla que recoja todas las constantes que hemos creado-->
	<head>
		<title>CONSTANTES</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			//crear constante con const
			const CONSTANTE = 'Hola Mundo';
			//crear constante con define
			define("CONSTANTE2","5",true);
			//string
			echo $cadena='La constante:'. CONSTANTE.' está definida con const. La constante '.CONSTANTE2.' está definida con define'."</br>";
			echo CONSTANTE."</BR>";
			echo CONSTANTE2;
		?>
	</body>
	
</html>
