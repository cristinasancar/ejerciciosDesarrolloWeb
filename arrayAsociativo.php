<!DOCTYPE html>
<html lang="es">
<!--#Crear un array asociativo sobre tí  
* que tenga los siguientes pares de clave valor: 
nombre, apellidos,email, estudios, poblacion;
* Si desconocemos un valor, pondremos espacio vacío
* Imprimir los valores de un alumno determinado
* Imprimir el array completo mediante el bucle for each en una tabla html-->
	<head>
		<title>ARRAY ASOCIATIVO</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<table border=1px>
			<tr>
				<th colspan="2">Datos alumnos</th>
			</tr>
				<?php
					$yo=array("nombre"=>"Cristina","apellidos"=>"Santos","email"=>"crisan_car@hotmail.com","estudios"=>"siiiiiii","poblacion"=>"Los Yébenes");
					foreach ($yo as $clave => $alumno) {
						echo '<tr><td>'.$clave.'</td>'.'<td>'. $alumno.'</td></tr>';
					}
				?>
		<table>
	</body>
</html>
