<!DOCTYPE html>
<html lang="es">
<!--Crearemos un sencillo programa que cargue dinámicamente imágenes cada vez que un visitante acceda a la página

Crear un html básico que incorpore una imagen
Cargar el root del ejercicio un directorio con tres imágenes
El nombre de la imagen y su extensión deben ser una variable en php
<img src="img/<?php $imagen ?>">
Asignar un valor aleatorio a $imagen entre '1 y 3' mediante la función rand().

Dependiendo del valor obtenido mostrar una imagen u otra,

Nota: Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:

if ($valor==3)
  //algoritmo
-->
	<head>
		<title>Usando if e incorporando php en html</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h1>Cambiando imágenes según número aleatorio</h1>
		<?php
			$numero=rand(1,3);//saca un número aleatorio entre 1 y 3, ambos incluidos.
			if($numero==1){
				$imagen="1.jpg";
			}
			if($numero==2){
				$imagen="2.jpg";
			}
			if($numero==3){
				$imagen="3.jpg";
			}
		?>
		<img src="<?php echo $imagen?>" alt="imagen mono"/>
					
	</body>
</html>
