<?php


/**
 * Read users from file
 * @return array users
 */



function getLinkRead($config)
{
	$linkRead=mysqli_connect($config['database.server'],
			$config['database.username'],
			$config['database.password']
	);
	
	mysqli_select_db($linkRead,$config['database.db'] );
	
	return $linkRead;
}

function getLinkWrite($config)
{
	$linkRead=mysqli_connect($config['database.server'],
			$config['database.username'],
			$config['database.password']
	);

	mysqli_select_db($linkRead,$config['database.db'] );

	return $linkRead;
}

function selectAll($config)
{
	
	$linkRead=getLinkRead($config);
	$a=1;
	// Prepare
	$sql="SELECT * FROM users";
	echo $sql;
	$result=mysqli_query($linkRead,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		$users[]=$row;
	}
	
	return $users;
}


function select($id,$config)
{
	$linkRead=getLinkRead($config);

	// Prepare
	$sql="SELECT * FROM users WHERE idusers=".$id;

	$result=mysqli_query($linkRead,$sql);
	$row=mysqli_fetch_array($result);
	

	return $row;
}



function updateUser($id, $user, $config)
{
	$linkWrite=getLinkWrite($config);
	$city=array('zgz'=>1);
	
	
	$sql = "UPDATE users SET 
			name ='".$user['name']."',
			email ='".$user['email']."',
			address ='".$user['address']."',
			phone ='".$user['phone']."',
			description ='".$user['description']."',
			genders_idgenders =".$city[$user['city']]."
			WHERE idusers=".$id;
	echo $sql;
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	die;
	mysqli_query($linkWrite, $sql);
		
}













