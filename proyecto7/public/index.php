<?php 

session_start();
$_SESSION['casc']='asdasdasd';
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

session_destroy();
session_start();
session_regenerate_id();

$_SESSION['casc']='123123123';

echo session_id();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";



die;
// setcookie('cosa','caca2');

//setcookie("cosa", 'cac', time()+3600);

// echo "<pre>";
// print_r($_COOKIE['cosa']);
// echo "</pre>";

// die;

// Define application environment
defined('APPLICATION_ENV') ||
	define('APPLICATION_ENV',
			(getenv('APPLICATION_ENV') ?
			 getenv('APPLICATION_ENV') : 'production'));

require_once ("../model/generalModel.php");
require_once ("../model/filesModel.php");
require_once ("../model/users/file/users.php");

$configFile="../configs/config.ini";
$config=readConfig($configFile, "production");


$request=getRequest();

$layoutparams=array(
		"request"=>$request,
		"config"=>$config);

switch ($request['controller'])
{
	case 'users':
		echo renderLayout('frontend', $request['controller'],$layoutparams);
	break;
	case 'index':
		echo renderLayout('frontend', $request['controller'],$layoutparams);				
	break;
	
	default:
		
	break;
}








