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
			writeUserToFile($filename, $_POST, $config);			
			//Saltar de pagina
			header("Location: /?controller=users&action=select");
		}
		else
		{
			$user=array();
			getView('insertForm', 'users', array('user'=>$user), $config);	
		}
	break;
	case 'update':
		if($_POST)
		{
			$filename = uploadPicture($_FILES, $config);
			updateUserTofile($_GET['id'], $_POST, $filename, $config);
			//Saltar de pagina
			header("Location: /?controller=users&action=select");
		}
		else
		{
			$user=readUserFromFile($_GET['id'], $config);
			getView('insertForm', 'users', array('user'=>$user), $config);
		}
		
	break;
	case 'delete':
		if($_POST)
		{
			if($_POST['submit']=='Si')
			{
				$filename = getUserFilename($_POST['id'], $config);
				updateUserTofile($_GET['id'], $_POST, $filename, $config, true );
			}
			header("Location: /?controller=users&action=select");
		}
		else
		{
			echo "esto es delete";
			
			getView('delete', 'users', array(), $config);
		}		
	break;
	case 'select':
		$users=readUsers($config);
		getView('select', 'users', array('users'=>$users), $config);		
	break;
	default:
		echo "esto es default";
	break;
	
}






