<?php



/**
 * Read config file to array
 * @param string $filename
 * @return array config
 */
function readConfig($filename, $section)
{
	//Obtener en un array el config.ini
	$config=parse_ini_file($filename, true);
	//Recorrer el array
	foreach($config as $key => $value)
	{
		$array_key=explode(":", $key);
		if($array_key[0]==$section)
		{	
			$config_1=$config[$key];
			if(isset($array_key[1]))
				$config_2=$config[$array_key[1]];
			else
				$config_2=$config_1;	
			break;
		}	
	}
	$config = array_merge($config_2, $config_1);
	
	return $config;
	
}





function getView($action = 'index', $controller = 'index', $viewParams, $config)
{
	
	include_once($_SERVER['DOCUMENT_ROOT'].$config['views']."/".
				$controller."/".$action.".php");
}

























