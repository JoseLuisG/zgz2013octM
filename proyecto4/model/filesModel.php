<?php



/**
 * Upload a file to users directory
 * @param array $array_files
 * @return string filename
 */
function uploadPicture ($array_files)
{
	
	
	$dir = $_SERVER['DOCUMENT_ROOT']."/uploads";
	move_uploaded_file($array_files['photo']['tmp_name'],
	$dir."/".$array_files['photo']['name']);
		
	
	return $array_files['photo']['name'];
}