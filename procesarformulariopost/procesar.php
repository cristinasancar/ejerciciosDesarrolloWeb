<!DOCTYPE html>
<!--Procesar el formulario mediante post y en la página procesada
saludar al usuario (implicando su sexo y su nombre), Ejemplo Hola, querido amig(o/a), nombre
decirle su edad
decirle un mensaje personalizado según los estudios
Si desea recibir información le informamos de los cursos que tenemos-->
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Páginas idiomas</title>
	<meta charset="utf-8" >
</head>
<body>
	<?php
		
		$nombre=$_POST['nombre'];
		$sexo=$_POST['sexo'];
		$estudios=$_POST['estudios'];
		$fecha=$_POST['fecha'];//año, mes, dia
		
	//	if(isset($nombre)&&isset($sexo)&&isset($estudios))//si no está definida la variable que no de fallo
		//coger el valor del select
		if($sexo=="mujer"){
			 $cadena="Hola querida $nombre";
		}else{
			$cadena="Hola querido $nombre";
		}
		/*ejemplo con switch
		switch($sexo){
			case 'hombre':
				 $cadena="Hola querido $nombre";
				 bread;
			case '$mujer':
				$cadena="Hola querida $nombre";
				break;
			default:
				$cadena="Hola sin sexo $nombre";
		}
		*/
		
		//coger el valor de los radio
		if($estudios=="no"){
			$cadena.=" no tienes estudios";
		}else if($estudios=="primarios"){
			$cadena.=" con estudios primarios";
		}else{
			$cadena.=" con estudios secundarios";
		}
		//coger el valor del checkbox
		if(empty($_POST['info'])){
			$cadena.=" no hay cursos en este momento";
		}else{
			$cadena.=" tiene el curso de desarrollo";
		}
		echo $cadena;
		
		//coger el valor de un type date
		$anio=explode('-',$fecha);
		$anio[0];
		echo date('Y')-$anio[0];
	?>
	

</body>
</html>
