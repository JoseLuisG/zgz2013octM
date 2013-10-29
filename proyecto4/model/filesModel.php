<?php



/**
 * Upload a file to users directory
 * @param array $array_files
 * @return string filename
 */
function uploadPicture ($array_files)
{

	$dir = $_SERVER['DOCUMENT_ROOT']."/uploads";
	$directory=scandir($dir);
	
// 	mientras que el nombre exista en el array
	$file=$array_files['photo']['name'];
	$a=0;
	while(in_array($file, $directory))
	{
		$a++;
		$infofile=pathinfo($dir."/".$array_files['photo']['name']);
		$file=$infofile['filename']."-".$a.".".$infofile['extension'];
	}
		
	move_uploaded_file($array_files['photo']['tmp_name'],
						$dir."/".$file);
	return $file;
}





