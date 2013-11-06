<?php 


session_start();
session_destroy();
echo session_id();

die;

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
		renderLayout('frontend', $request['controller'],$layoutparams);
	break;
	case 'index':
		renderLayout('frontend', $request['controller'],$layoutparams);				
	break;
	
	default:
		
	break;
}








