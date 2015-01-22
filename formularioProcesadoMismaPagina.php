<!DOCTYPE html>
<!--Crear un formulario que se procese en la misma página
Debe tener un campo para el nombre y dos tipo password
Debemos recibir un mensaje si los password son diferentes
Debemos prevenir con alguna función de php el error de variable vacía o no definida mediante isset() o empty()-->
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Formulario procesado misma página</title>
	<meta charset="utf-8" >
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div>
			<label for="nombre"> Nombre</label>
			<input name="nombre" type="text" placeholder="introduce nombre" required>
		</div>
		<div>
			<label for="password1">Contraseña 1</label>
			<input name="p2" type="password" placeholder="introduce contraseña 1">
		</div>
		<div>
			<label for="password2">Contraseña 2</label>
			<input name="p1" type="password" placeholder="introduce contraseña 2">
		</div>
		<input type="submit"></input>
	</form>
	<?php
	
	/*if(empty($_POST['p1'])&&empty($_POST['p2'])){//PARA QUE NO SALGA ERROR NADA MÁS CARGAR LA PÁGINA, YA QUE LOS CAMPOS NO VAN A TENER VALOR, si vacio!!
		//echo "no has metido valores";
		
		}else{
			$password1=$_POST['p1'];
			$password2=$_POST['p2'];
			if($password1!==$password2){
				echo "las contraseñas son diferentes";
			}
			else{
				echo "IGUALES";
			}
		}*/
		if(isset($_POST['p1'])&&isset($_POST['p2'])){//PARA QUE NO SALGA ERROR NADA MÁS CARGAR LA PÁGINA, YA QUE LOS CAMPOS NO VAN A TENER VALOR, si tiene algo!!
		//echo "no has metido valores";
		$password1=$_POST['p1'];
			$password2=$_POST['p2'];
			if($password1!==$password2){
				echo "las contraseñas son diferentes";
			}
			else{
				echo "IGUALES";
			}
		}
		else{
			
		}
		
		
	?>
	
		
</body>
</html>
