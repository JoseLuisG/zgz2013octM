F=0,1,1,2,3,5,8,13,21,34,

<?php
$b=50;
$n=0;
$n1=1;
$suma = $n + $n1;
echo "F=0,1,";

while ($suma<=$b)
{
	echo $suma.",";
	$n = $n1;
	$n1 = $suma;
	$suma = $n + $n1;	
}