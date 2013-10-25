<?php

echo "<pre>Post:";
print_r($_POST);
echo "</pre>";

echo "<pre>Get:";
print_r($_GET);
echo "</pre>";

echo "<pre>Files:";
print_r($_FILES);
echo "</pre>";

$dir = $_SERVER['DOCUMENT_ROOT']."/uploads";
move_uploaded_file($_FILES['photo']['tmp_name'], 
				   $dir."/".$_FILES['photo']['name']);



//Recorrer el array
foreach($_POST as $key => $value)
{
	//Si es un array dividir por pipes
	if (is_array($value))
		$value = implode('|',$value);
	
	//Escibir en un array temporal
	$out[]=$value;
}	
//Añadir foto
$out[]=$_FILES['photo']['name'];
//Convertir el array temporal en un string	
$data = implode(',', $out);	

//Escribir en el fichero usuarios.txt
$filename= $_SERVER['DOCUMENT_ROOT']."/usuarios.txt";
file_put_contents($filename, $data."\n", FILE_APPEND);

//Saltar de pagina
header("Location: /usuarios.php");












