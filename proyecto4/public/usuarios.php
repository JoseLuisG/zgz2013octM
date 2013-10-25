<?php 

if(isset($_GET['action']))
	$action=$_GET['action'];
else
	$action ='select';


switch ($action)
{
	case 'insert':
		if($_POST)
		{
			$filename = uploadPicture($_FILES);			
			writeUserToFile($filename, $_POST);			
			//Saltar de pagina
			header("Location: /usuarios.php");
		}
		else
		{
			include ("/formulario.php");	
		}
	break;
	case 'update':
		echo "esto es update";
	break;
	case 'delete':
		echo "esto es delete";
	break;
	case 'select':
		$users=readUsersFromFile();
		include("select.php"); 
	break;
	default:
		echo "esto es default";
	break;
	
}
?>












