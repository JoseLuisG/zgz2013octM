<?php
function factorial ($f)
{
	if ($f == 0)
	{
		return 1;
	}
	else 
	{
		return $f * factorial($f-1);	
	}
}

$a = 16;
$b = factorial($a);
echo "$b";
?>