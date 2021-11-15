<?php


require_once "Hippopotamus.php";


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


?>