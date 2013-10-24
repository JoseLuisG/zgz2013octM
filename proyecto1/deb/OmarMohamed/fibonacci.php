<?php
if(isset($_GET['valor']))
{
$max = $_GET['valor'];

$n0=0;
$n1=1;
$n2=$n0+$n1;
$serie = '0, 1, ';
for($i=0;$n1+$n2<$max;$i++){
	$n0=$n1;
	$n1=$n2;
	$n2=$n0+$n1;
	$serie = $serie.$n2.', ';
}
$serie=substr($serie,0,-2);
echo $serie;
}

?>
<html>

<head>
<title>página de pruebas</title>
</head>

<body>
<form action="fibonacci.php">
máximo: <input type="text" name="valor"/>
<input type="submit" value="enviar"/>
</form>
</body>


</html>