<?php

function factorial ($n) 
{ 
if ($n==1) return 1; 
else return $n * factorial($n-1); 
} 

$m = 5;
$n = 3;

$mn = $m - $n;

$res = (factorial($m))/(factorial($n) * factorial($mn));

echo $res;

?>