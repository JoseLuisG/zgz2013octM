<?php

/**
 * Write users to file
 * @param string $filename
 * @param array $array_data
 * @return null
 */
function writeUserToFile($filename, $array_data)
{
	//Recorrer el array
	foreach($array_data as $key => $value)
	{
		//Si es un array dividir por pipes
		if (is_array($value))
			$value = implode('|',$value);
			
		//Escibir en un array temporal
		$out[]=$value;
	}
	//Añadir foto
	$out[]=$filename;
	//Convertir el array temporal en un string
	$data = implode(',', $out);
		
	//Escribir en el fichero usuarios.txt
	$filename= $_SERVER['DOCUMENT_ROOT']."/usuarios.txt";
	file_put_contents($filename, $data."\n", FILE_APPEND);
	
	return;
}



/**
 * Read users from file
 * @return array users
 */
function readUsersFromFile()
{
	$users=array();
	$user=array();
	//Leer los datos del archivo de texto en un string
	$filename= $_SERVER['DOCUMENT_ROOT']."/usuarios.txt";
	$data=file_get_contents($filename);
	//Separar el string por lineas en un array (filas)
	$filas = explode("\n", $data);
	//Recorrar el array (filas)
	foreach($filas as $key => $value)
	{
		//Dividir el string de fila en un array (columnas)
		$user = explode(',', $value);
		$users[]=$user;		
	}
	return $users;
}










