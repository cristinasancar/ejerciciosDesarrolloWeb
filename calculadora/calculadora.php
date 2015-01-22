<!DOCTYPE html>
<html lang="es">
<!--Elaborar un script que permita tener una calculadora web para 2 números cualquiera, que acepte las operaciones algorítmicas +-/*%
Debemos utilizar dos páginas, una que recoja los datos y otra que los procese...
Podemos utilizar un formulario que recoja dos números y un select para realizar las operaciones-->
	<head>
		<title>CalculadoraFormulario</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h1>Calculadora en php</h1>
		<!--caja de texto num1-->
		<form method="post" action="Procesar.php">
			<label for="numero1">Número 1</label>
			<input name="numero1"type="number"id="num1" placeholder="introduce número" required>
			<!--caja de texto num2-->
			<label for="numero2">Número 2</label>
			<input name="numero2"type="number"id="num2" placeholder="introduce número" required>
			<select name="operacion">
				<option value="nula"></option>
				<option value="suma">+</option>
				<option value="resta">-</option>
				<option value="dividir">/</option>
				<option value="multiplicar">*</option>
				<option value="modulo">%</option>
			</select>
			<button  type="submit">Calcular</button>
			
	</body>
</html>
