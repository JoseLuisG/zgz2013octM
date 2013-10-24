<?php
$n = 16;
$m = 3;
$result = 0;

//formula n! / (m!(n-m)!)
function combinatoria($a, $b) {
	//opcion A
	//$result = gmp_fact($a) / (gmp_fact($b)*gmp_fact($a-$b));
	//opcion B
	$result = factorial($a) / (factorial($b)*factorial($a-$b));
	return $result;
}

function factorial($num) {
	$aux = $num;
	$res = 1;
	for ($aux = $num; $aux>1; $aux--) {
		$res = $res * $aux;
	}
	return $res;
}

echo "La combinatoria entre " . $n . " y " . $m . " es: " . combinatoria($n, $m);
?>