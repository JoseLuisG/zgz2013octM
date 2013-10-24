<?php
$hasta=30;
$i1=0;
$i2=1;
$linea=$i1;
for($i=0;$i2<30;$i++){
	$valor=$i1+$i2;
	$linea.=",".$valor;
	$i1=$i2;
	$i2=$valor;
	}
echo $linea;
?>