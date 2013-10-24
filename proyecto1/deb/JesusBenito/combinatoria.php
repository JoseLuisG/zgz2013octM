<?php

// Funcion que calcula el factorial de un numero dado
function fact($x){
	$fact=1;
	for($i=1; $i <= $x; $i++){
		$fact = $fact * $i;		
	}
	return $fact;
}

// Funcion que calcula la combinatoria de n sobre m
function comb($n, $m){
 $c = fact($m) / (fact($n) * fact($m - $n));
 return $c;
 }

 $x = 4;
 $y = 10;
 echo comb($x, $y);

?>
