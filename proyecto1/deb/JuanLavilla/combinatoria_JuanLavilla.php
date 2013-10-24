<?php


// ( n m ) = n! / m! * (n-m)!

//Ejemplo: 16 sobre 3 = 560

$n= 16;
$m= 3;

$nm= $n - $m;


// calcular factorial n
$factorial_n= factorial($n);
// calcular factorial m
$factorial_m= factorial($m);
// calcular factorial nm
$factorial_nm= factorial($nm);

$resultado= $factorial_n / ($factorial_m * $factorial_nm);

echo "Combinatoria de $n sobre $m " . " = " . "$resultado";
 



// funcion que devuelve el factorial
// del numero indicado como parametro
function factorial ($numero){
	
	if($numero==1){
		return 1;
	}
	else {
		return $numero * factorial($numero-1);	
	}
	
}

?>