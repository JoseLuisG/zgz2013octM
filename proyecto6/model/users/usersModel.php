<?php

/**
 * Write users to file
 * @param string $filename
 * @param array $array_data
 * @return null
 */

// function insert($user,$config)

// function update($user, $id, $config)

// function select($id, $config)

function selectAll($config)
{
	switch ($config['adapter'])
	{
		case 'txt':
			include_once('file/users.php');
			$users=readUsersFromFile($config);
			return $users;
		break;
		case 'MySql':
			include_once('mysql/users.php');
			$users = readUsersFromMysql($config);
			return $users;
		break;
	
	}
}

// function delete($id, $config)










