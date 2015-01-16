<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Páginas idiomas</title>
	<meta charset="utf-8" >
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">


<h2 style="text-transform:uppercase;"><?php echo $nombre=$_GET['nombre']?></h2>
<?php

$ingles =<<<INGLES
	<h3>MONKEYS</h3>
	<p>Monkey is a term not taxonómico that it designates to a wide set of primates simiiformes. 
	The terms monkey and ape are synonymous, 1 but in the zoological slang it is in the habit of differing between both for influence 
	of the Englishman, language in which the equivalent terms monkey and ape have different meaning. This way, in the above mentioned scientific slang,
	the current monkeys would understand to the platirrinos (Platyrrhini or monkeys of the New World) and to the cercopitecoideos (Cercopithecoidea or monkeys
	of the Old World), but not to the primates hominoides, nearest the man, as the orangutan, the gorilla, the chimpanzee and the gibbons, which would be apes.
	Unlike these, the monkeys possess in general tail, have a more primitive skeleton and are smaller. This use of the word "ape" like translation of the word
	</p>
INGLES;
$frances =<<<FRANCES
	<h3>MONÓS</h3>
	<p>Un singe est une limite non taxonómico qu'il désigne à l'ample ensemble de primates simiiformes. Les limites le singe et le singe sont synonymes, 
	1 mais dans le jargon zoologique il a l'habitude de se distinguer entre les deux par influence de l'Anglais, de langue sur celui que les limites équivalentes
	monkey et ape ont différent signifié. Ainsi, dans le dit jargon scientifique, les actuels singes comprendraient les platirrinos (Platyrrhini ou un singes du
	Nouveau Monde) et les cercopitecoideos (Cercopithecoidea ou un singes du Vieux Monde), mais non aux primates hominoides, plus proche de l'homme, comme
	l'orang-outan, le gorille, le chimpanzé et les gibbons, qui seraient singes. Au contraire de ceux-ci, les singes possèdent en général une queue, ont 
	un squelette plus primitif et sont plus petits. Cet usage du mot "un singe" comme traduction le mot</p>
FRANCES;
$espaniol =<<<ESPANIOL
	<h3>MONOS</h3>
	<p>Mono es un término no taxonómico que designa a un amplio conjunto de primates simiiformes.
     Los términos mono y simio son sinónimos,1 pero en la jerga zoológica suele distinguirse entre ambos por influencia del inglés, 
	 idioma en el que los términos equivalentes monkey y ape tienen diferente significado. Así, en dicha jerga científica, los monos actuales 
	 comprenderían a los platirrinos (Platyrrhini o monos del Nuevo Mundo) y a los cercopitecoideos (Cercopithecoidea o monos del Viejo Mundo),
	 pero no a los primates hominoides, más cercanos al hombre, como el orangután, el gorila, el chimpancé y los gibones, que serían simios.
	 A diferencia de éstos, los monos poseen por lo general cola, tienen un esqueleto más primitivo y son más pequeños. Este uso de la palabra “simio” 
	 como traducción de la palabra inglesa ape, restringida a los primates sin cola, es erróneo, y no corresponde al castellano. Se recomienda para este uso
	 la palabra hominoideo.2</p>
ESPANIOL;
$aleman =<<<ALEMAN
	<h3>MONER</h3>
	<p>Macaco é um termo não taxonómico que designa a um grupo largo de simiiformes de primatas.
	O macaco de condições e símio são sinónimos,1 mas no jargão zoológico ele/ela é normalmente distinto entre ambos para influência
	de inglês, idioma em qual as condições macaco equivalente e macaco têm significado diferente. Deste modo, em científico este jargão, os macacos atuais
	entenderiam ao platirrinos (Platyrrhini ou macacos do Mundo Novo) e o cercopitecoideos (Cercopithecoidea ou macacos do Mundo Velho), mas não para o hominoides
	de primatas, mais próximo ao homem, como o orangotango, o gorila, o chimpanzé e os gibões que seriam símios. Ao contrário destes, os macacos possuem linha
	em geral, eles têm um esqueleto mais primitivo e eles são menores. Este uso do palavra "símio" como tradução da palavra
</p>
ALEMAN;

//CON UN IF

/*if(empty($_GET['nombre'])){
	echo'';
}else{
	$nombre=$_GET['nombre'];		
	if($nombre=='espaniol')echo $espaniol;
	if($nombre=='frances')echo $frances;
	if($nombre=='aleman')echo $aleman;
	if($nombre=='ingles')echo $ingles;
}*/

//CON UN SWITCH
$idioma=$_GET['nombre'];
switch ($idioma) {
    case 'ingles':
        echo $ingles;
        break;
    case 'aleman':
        echo $aleman;
        break;
    case 'espaniol':
        echo $espaniol;
        break;
	case 'frances':
        echo $frances;
     break;
}
?>
</div>
</body>
</html>
