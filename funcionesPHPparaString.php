<!DOCTYPE html>
<!--Adivinar el número de palabras que tiene.
Si es superior a 100 caracteres crear un substring que lo corte y añadir unos puntos suspensivos
Invertir
Sustituir la palabra 'PHP' por la palabra 'Ruby' y
poner en mayúsculas la palabra libre
Limitar el párrafo a cuatro palabras-->
<html  lang="es">
<head>
	<meta charset='UTF-8'>
	<title>Formulario POST</title>
	<meta charset="utf-8" >
</head>
<body>
	<?php
		$cadena="PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor 
		(inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la
		implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una 
		especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.";
		echo "<h3>N1 DE PALABRAS</h3>";
		//adivinar el nº de palabras que tiene
		$numPalabras= str_word_count("$cadena");
		echo "el número de palabras es: $numPalabras </br>";
		
		//Si es superior a 100 caracteres crear un substring que lo corte y añadir unos puntos suspensivos
		echo "<h3>SUPERIOR A 100 CARACTERES</h3>";
		$nLetras=strlen($cadena);
		if($nLetras>100){
			$corte=substr($cadena,0,100);
			echo $corte.="...";
		}
		
		//Invertir
		echo "<h3>INVERTIDA</h3>";
		$invertida=strrev($cadena);
		echo $invertida;
		
		//Sustituir la palabra 'PHP' por la palabra 'Ruby'
		echo "<h3>SUSTITUIR PHP POR RUBY</h3>";
		echo str_replace('PHP','Ruby',$cadena);
		
		//poner en mayúsculas la palabra libre
		echo "<h3>MAYÚSCULAS LIBRE</h3>";
		echo str_replace('libre','LIBRE',$cadena);
		
		//Limitar el párrafo a cuatro palabras
		echo "<h3>LIMITAR EL PÁRRAFO A 4 PALABRAS</h3>";
		$array = explode(" ", $cadena);
		for($i=0;$i<4;$i++){
			echo $array[$i]." ";
		}
		/*limitar el párrafo con funciones
		$array_texto=explode(" ",$texto);
		$array_corte=array_slice($array_texto,0,4);
		$array_union=implode($array_corte," ");
		echo "Párrafo limitado a 4 palabras: $array_union";
		*/
		
		
			
		
	?>
		
</body>
</html>