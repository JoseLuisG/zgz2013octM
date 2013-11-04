<?php 

// Define application environment
defined('APPLICATION_ENV') ||
	define('APPLICATION_ENV',
			(getenv('APPLICATION_ENV') ?
			 getenv('APPLICATION_ENV') : 'production'));

if(isset($_GET['controller']))
	$controller=$_GET['controller'];
else
	$controller ='frontend';


require_once ("../model/generalModel.php");
require_once ("../model/filesModel.php");
require_once ("../model/users/file/users.php");

$configFile="../configs/config.ini";
$config=readConfig($configFile, "production");

switch ($controller)
{
	case 'users':
		include_once ("../controllers/users.php");
	break;
	case 'frontend':
		echo "esto es frontend";
	break;
	default:
	break;
}