<?php

$config=array(
	'server'=>'localhost',
	'username'=>'root',
	'password'=>'',
	'db'=>'mydb'		
);

$linkWrite=mysqli_connect($config['server'],
			$config['username'],
			$config['password']
);

$linkRead=mysqli_connect($config['server'],
		$config['username'],
		$config['password']
);

mysqli_select_db($linkRead,$config['db']);

$a=1;
// Prepare 
$sql="SELECT * FROM users WHERE idusers=".$a;
echo $sql;
$result=mysqli_query($linkRead,$sql);
while($rows=mysqli_fetch_assoc($result))
{
	echo "<pre>row:";
	print_r($rows);
	echo "</pre>";
}



mysqli_close($linkWrite);
mysqli_close($linkRead);


// var_dump($linkWrite);
// var_dump($linkRead);

// echo "<pre>link:";
// print_r($linkRead);
// echo "</pre>";