<?php

$a = array("Nombre" => "Agustin",
			"Apellido" => "Calderon",
			"Email" => "agustincl@gmail.com",
			"ASDAS" => "ASDASD",
			"9" => "si",
			false => "mas",
			0 => "otra cosa",
			"6" => "jojoj",
			"seis" => "jajaja",
			6.8 => "float",
			array(4,8,15,16,23,42),
			98
			);

$a[4] = "ultimo";

var_dump($a);

echo "<pre>";
print_r($a);
echo "</pre>";


foreach($a as $key => $value)
// foreach($a as $value)
{
	echo $key.": ".$value;
	echo "<br/>";
	
}





