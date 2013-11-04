<?php

$config=array(
	'server'=>'localhost',
	'username'=>'root',
	'password'=>'',
	'db'=>'mydb'		
);

$linkWrite=mysql_connect($config['server'],
			$config['username'],
			$config['password']
);

$linkRead=mysql_connect($config['server'],
		$config['username'],
		$config['password']
);

mysql_select_db($config['db'],$linkRead);

$a=1;
// Prepare 
$sql="SELECT * FROM users";
echo $sql;
$result=mysql_query($sql,$linkRead);
while($rows=mysql_fetch_assoc($result))
{
	echo "<pre>row:";
	print_r($rows);
	echo "</pre>";
}



mysql_close($linkWrite);
mysql_close($linkRead);


// var_dump($linkWrite);
// var_dump($linkRead);

// echo "<pre>link:";
// print_r($linkRead);
// echo "</pre>";