<?php
if(isset($_GET['valor1']) AND isset($_GET['valor2'])){
	$num1 = $_GET['valor1'];
	$num2 = $_GET['valor2'];
	function factorial($n){
		$j=1;
		for($i=1;$i<=$n;$i++)
			{$j=$j*$i;}
		return $j;
	}
	$c = factorial($num1)/(factorial($num2)*factorial($num1-$num2));
	
	echo $num1.' sobre '.$num2.' vale '.$c;
}
?>
<html>

<head>
<title>página de pruebas</title>
</head>

<body>
<form action="factorial.php">
n: <input type="text" name="valor1"/><br/>
sobre <br/>
m: <input type="text" name="valor2"/><br/>

<input type="submit" value="factorial"/>
</form>
</body>


</html>