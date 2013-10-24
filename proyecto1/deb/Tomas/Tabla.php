<?php
$a=8;
$b=4;
echo "<table border=1>";
for($ib=0;$ib<=$b;$ib++){
	$c=$ib;
	if($c==0) $c=1;
	$linea="<td align='right'>".(($ib==0)?'':$c)."</td>";
	for($ia=1;$ia<=$a;$ia++){
		$linea.="<td align='right'>".($ia*$c)."</td>";
	}
	echo "<tr>$linea</tr>";
}
echo "</table>";
?>