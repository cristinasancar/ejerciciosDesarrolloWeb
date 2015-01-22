<?php
	$nombre= $_POST['nombre'];//el . es para concatenar
	$password= $_POST['password'];
	if($nombre=='cris'&&$password=='unitel'){
		header('Location:usuario1.php');
		exit;
	}else if($nombre=='isabel'&&$password=='uni'){
		header('Location:usuario2.php');
		exit;
		}else if($nombre=='pepe' &&$password=='holita'){
			header('Location:usuario3.php');
			exit;
				}else if($nombre=='lucas' &&$password=='loca'){
					header('Location:usuario4.php');
					exit;
						}else if($nombre=='sofia' &&$password=='titi'){
							header('Location:usuario5.php');
							exit;
								}else{
									header('Location:invitado.php');
									exit;
								}
			
			
	
	
?>


		