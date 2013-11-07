<?php 
$request=$layoutparams['request'];
$config=$layoutparams['config'];



echo "<pre>";
print_r($_COOKIE['cosa']);
echo "</pre>";



echo "<pre>";
print_r($_SESSION);
echo "</pre>";



require_once '../model/users/usersModel.php';
switch ($request['action'])
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
			//$data=getGenders($config);
			$data=array('1'=>'Mujer',
					'2'=>'Hombre',
					'3'=>'Otros');
			getView('insertForm', 'users', array('user'=>$user,'data'=>$data), $config);	
		}
	break;
	case 'update':
		if($_POST)
		{
			$user=$_POST;
			$user['filename']=uploadPicture($_FILES, $config);
			update($user,$request['params']['id'],$config);
			header("Location: /users");
		}
		else
		{
			$user=readUser($request['params']['id'], $config);
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
	case 'index':
	case 'select':
		$users=readUsers($config);
		getView('select', 'users', array('users'=>$users), $config);		
	break;
	default:
		echo "esto es default";
	break;
	
}






