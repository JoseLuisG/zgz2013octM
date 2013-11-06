<?php


function getGenders($config)
{
	$linkRead=getLinkRead();
	
	$sql="SELECT * FROM genders";
	$result=mysqli_query($linkRead, $sql);
	
	$genders=mysqli_fetch_assoc($result);
	
	return $genders;
}