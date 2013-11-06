<?php
$request=$layoutparams['request'];
$config=$layoutparams['config'];

switch ($request['action'])
{
	case 'index':
		getView('index', 'index', array(), $config);
	break;
}