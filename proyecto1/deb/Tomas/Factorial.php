<?php
//C m n es m! / n!(m-n)!
//C 16 3 = 560

$m=16;
$n=3;
$res=fac($m)/(fac($n)*fac($m-$n));
//echo "fac(m)=".fac($m)."<br/>";
//echo "fac(n)=".fac($n)."<br/>";
echo "resultado=$res";
function fac($var){
	$valor=1;
	for($i=1;$i<=$var;$i++) $valor=$valor*$i;
	return $valor;
}
?>