<?php
	include("INCLUDES/header.php");
?>
<div class='container'>
<?php
//recojo las variables del formulario
	$nombre= $_POST['nombre'];//el . es para concatenar
	$email= $_POST['email'];
	$poblacion= $_POST['poblacion'];
	
//pasamos los parámetros en la función	
	include('INCLUDES/funciones.php');
	echo '<p>'.sobreMi($nombre,$email,$poblacion).'</p>';
?>
</div>
<?php
	include("INCLUDES/footer.php");
?>
	



		