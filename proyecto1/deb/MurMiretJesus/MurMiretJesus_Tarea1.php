<?php

function factorial($numero){
    $k=1;
    for($i=$numero;$i>0;$i--){
        $k=$i*$k;
    }
    return $k;
}

$n=16;
$m=3;

$resultado=factorial($n)/(factorial($m)*  factorial($n-$m));

echo "El valor de la combinatoria entre $n y $m es ".$resultado;

?>

