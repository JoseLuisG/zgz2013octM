<?php

$xinf= pi();
$xsup = 2*pi();

for($i=0;$i<=10;$i++){
	$xmed = ($xinf+$xsup)/2;
	
	$vinf_c = 2-cos($xinf);
	$vinf_r = $xinf/pi();
	$delta_i = $vinf_c - $vinf_r;

	$vsup_c = 2-cos($xsup);
	$vsup_r = $xsup/pi();
	$delta_s = $vsup_c - $vsup_r;

	$vmed_c = 2-cos($xmed);
	$vmed_r = $xmed/pi();
	$delta_m = $vmed_c - $vmed_r;

	if($delta_m<0){
		if($delta_i<0)
			{$xinf=$xmed;}
		else
			{$xsup=$xmed;}
	}
	elseif($delta_m>0){
		if($delta_i>0)
			{$xinf=$xmed;}
		else
			{$xsup=$xmed;}
	}
	if($delta_m<0.001 AND $delta_m>-0.001)
		{break(1);}
}

$area = 0;
for($i=0;$i<=$xmed;$i=$i+1/10000)
	{$area = $area + (2-cos($i)-$i/pi())*0.0001;}
echo $area; 

?>