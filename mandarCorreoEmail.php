<!DOCTYPE html>
<!--Crear un formulario en html
con un campo de texto que solicite el nombre del usuario
un campo de tipo fecha que solicite su fecha de nacimiento
Un campo tipo select que indique su sexo.
un campo tipo radio 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios
Un campo tipo checkbox ,ckecked por default, que diga que quiero recibir información periódicamente
Un campo tipo checkbox que diga que acepto las condiciones del servicio-->
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Formulario POST</title>
	<meta charset="utf-8" >
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div>
			<label for="nombre"> Nombre</label>
			<input name="nombre" type="text" placeholder="introduce nombre" required>
		</div>
		<div>
			<label for="email"> E-mail</label>
			<input name="email" type="email" placeholder="introduce e-mail" required>
		</div>
		<div>
			<label for="asunto"> Asunto:</label>
			<input name="asunto" type="text" required>
		</div>
		<div>
			<label for="comentario">Comentario</label>
			<textarea name="asunto"></textarea>
		</div>
		<div>
			<input name="enviar" type="submit">
		</div>
	</form>
	
	<?php
	if(isset($deNombre)&&isset($paraEmail)&&isset($asunto)&&isset($comentario)){
		$deNombre=$_POST['nombre'];
		$asunto=$_POST['asunto'];
		$paraEmail=$_POST['email'];
		$comentario=$_POST['comentario'];
		mail($deNombre, $paraEmail, $asunto, $comentario);
	}
?>
		
</body>
</html>
