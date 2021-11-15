<?php


require_once "Hippopotamus.php";
require_once "Point.php";
require_once "Circle.php";

$h1=new Hippopotamus('fred',2500,75);
$h2=new Hippopotamus('fred',2500,75);


echo $h1->afficher_objet();

echo $h1->fight($h2);

/* debut cycle de vie */

for ($i=0; $i<21;$i++):
	for ($j=0;$j<15;$j++):
		$h1->eat();
		for($y=0;$y<3;$y++):
			$h1->swim();
		endfor;
	endfor;
	echo "Au jour ".$i." : ". $h1->afficher_objet();
endfor;

/* fin cycle de vie */


/* Debue Point */

$p1=new Point(5,6);

echo $p1->affiche_objet();

$p1->setX(0);

echo $p1->affiche_objet();

$p1->setX(5);

/* fin Point */

/* Debut Circle */

$c1=new Circle($p1,6);

echo $c1->area();


$p2=new Point(5,0);

if($c1->containsPoint($p2)):
	echo "le point p2 appartient à c1";
else:
	echo "il n'apparitient pas à c1";
endif;



?>