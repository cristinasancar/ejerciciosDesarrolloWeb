<!DOCTYPE html>
<html lang="es">
<!--crea dos arrays 
* uno de lenguajes de servidor
* Otro de lenguajes cliente
* Concatenalos e imprímelos en html mediante una lista ordenada-->
	<head>
		<title>ARRAY ASOCIATIVO</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		
		<?php
			$cliente=["javascript","visual Basic", "flash"];
			$servidor=["php","jsp","jpa"];
			$listadoLenguajes=[$cliente,$servidor];
			//imprimir cada array por separado en listas dentro de php
			echo '<ol>';
			for($i=0;$i<count($cliente);$i++){
				echo '<li>'.$cliente[$i].'</li>';
			}
			echo '</ol>';
			echo '<ol>';
			for($i=0;$i<count($servidor);$i++){
				echo '<li>'.$servidor[$i].'</li>';
			}
			echo '</ol>';
			//imprimir array de arrays con bucle for
			echo '<ol>';
			for($i=0;$i<count($listadoLenguajes);$i++){
				for($j=0;$j<=count($listadoLenguajes);$j++){
					echo '<li>'.$listadoLenguajes[$i][$j].'</li>';
				}
			}	
			echo '</ol>';
			
		?>
		</ol>
		<table>
	</body>
</html>
