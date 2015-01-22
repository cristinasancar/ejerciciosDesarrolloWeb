<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Procesar calculadora</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
		//recojo las variables del formulario
			$numero1= $_POST['numero1'];
			$numero2= $_POST['numero2'];
			$operacion= $_POST['operacion'];
			
			if($operacion==""){
				echo "No ha seleccionado ninguna operación";
			}
			if($operacion=="suma"){
				$suma=$numero1+$numero2;
				echo "La suma de $numero1 +$numero2 es: $suma";
			}
			if($operacion=="resta"){
				$resta=$numero1-$numero2;
				echo "La resta de $numero1 -$numero2 es: $resta";
			}
			if($operacion=="multiplicar"){
				$multiplicar=$numero1*$numero2;
				echo "La multiplicación de $numero1 *$numero2 es: $multiplicar";
			}
			if($operacion=="dividir"){
				$dividir=$numero1/$numero2;
				echo "La división de $numero1 /$numero2 es: $dividir";
			}
			if($operacion=="modulo"){
				$modulo=$numero1%$numero2;
				echo "El resto de $numero1 %$numero2 es: $modulo";
			}
			
		?>
		
	<body>
</html>






		