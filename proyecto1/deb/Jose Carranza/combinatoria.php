<?php

//function_exists($factorial);
//Combinatoria i!/n!(i-n)!
$suma=1;
for ($i=4;$i>1;$i--){
	echo $suma=$suma*$i;
	
}
for($n=2;$n>1;$n--){
	echo $suma=$suma*$n;
}
$c=$i-$n;
for($c;$c>1;$c--){
	echo $suma=$suma*$c;
}
echo ($i/$n)*$c;

?>
