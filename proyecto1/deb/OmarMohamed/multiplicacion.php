<?php
$N=$_REQUEST['n'];
$n0=0;
$n1=1;

$n2 = $n0 + $n1;
echo $n0.', '.$n1.', ';
while($N>$n2)
	{
		echo $n2.', ';
		$n0=$n1;
		$n1=$n2;
		$n2=$n0+$n1;
	}
?>