<?php 

if(isset($_GET['action']))
	$action=$_GET['action'];
else
	$action ='select';

require_once ("../model/filesModel.php");
require_once ("../model/users/usersModel.php");

switch ($action)
{
	case 'insert':
		if($_POST)
		{
			$filename = uploadPicture($_FILES);			
			writeUserToFile($filename, $_POST);			
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
			updateUserTofile($_GET['id'], $_POST, $filename);
			//Saltar de pagina
			header("Location: /users.php");
		}
		else
		{
			$user=readUserFromFile($_GET['id']);
			include ("../views/users/insertForm.php");			
		}
		
	break;
	case 'delete':
		if($_POST)
		{
			if($_POST['submit']=='Si')
			{
				$filename = getUserFilename($_POST['id']);
				updateUserTofile($_GET['id'], $_POST, $filename, true);
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
		$users=readUsersFromFile();
		include("../views/users/select.php"); 
	break;
	default:
		echo "esto es default";
	break;
	
}






