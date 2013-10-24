<?php
$n=11;
$k=4;

$num=1;
for($i=$n;$i>1;$i--)
{
	$num*=$i;
}
echo $num; echo "<br />";

$den1=1;
for($i=$k;$i>1;$i--)
{
	$den1*=$i;
}
echo $den1; echo "<br />";

$den2=1;
for($i=$n-$k;$i>1;$i--)
{
	$den2*=$i;
}
echo $den2; echo "<br />";

echo "<br />";
echo "Combinatorio de " .$n." sobre ".$k." es= ";
echo $num/($den1*$den2);


function factory ($x)
{
	$factory=1;
	for($i=$x;$i>1;$i--)
	{
		$factory*=$i;
	}
return $factory; 
}

echo "<br />";
echo "Combinatorio con función de " .$n." sobre ".$k." es= ";
echo factory($n) / ( factory($k) * factory($n-$k) );

?>