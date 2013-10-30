<?php 

if(isset($_GET['action']))
	$action=$_GET['action'];
else
	$action ='select';

require_once ("../model/generalModel.php");

$configFile="../configs/config.ini";
$config=readConfig($configFile, "production");

require_once ("../model/filesModel.php");
require_once ("../model/users/usersModel.php");

switch ($action)
{
	case 'insert':
		if($_POST)
		{
			$filename = uploadPicture($_FILES);			
			writeUserToFile($filename, $_POST, $config);			
			//Saltar de pagina
			header("Location: /users.php");
		}
		else
		{
			$user=array();
			include ("../views/users/insertForm.php");	
		}
	break;
	case 'update':
		if($_POST)
		{
			$filename = uploadPicture($_FILES);
			updateUserTofile($_GET['id'], $_POST, $filename, $config);
			//Saltar de pagina
			header("Location: /users.php");
		}
		else
		{
			$user=readUserFromFile($_GET['id'], $config);
			include ("../views/users/insertForm.php");			
		}
		
	break;
	case 'delete':
		if($_POST)
		{
			if($_POST['submit']=='Si')
			{
				$filename = getUserFilename($_POST['id'], $config);
				updateUserTofile($_GET['id'], $_POST, $filename, true, $config);
			}
			header("Location: /users.php");
		}
		else
		{
			echo "esto es delete";
			include ("../views/users/delete.php");
		}		
	break;
	case 'select':
		$users=readUsersFromFile($config);
		include("../views/users/select.php"); 
	break;
	default:
		echo "esto es default";
	break;
	
}






