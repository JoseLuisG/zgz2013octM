<?php

$altura = 2;

$xinf= $altura*pi();
$xsup = 3*pi();

for($i=0;$i<=10;$i++){
	$xmed = ($xinf+$xsup)/$altura;
	
	$vinf_c = $altura-cos($xinf);
	$vinf_r = $xinf*sin($xinf);
	$delta_i = $vinf_c - $vinf_r;

	$vsup_c = $altura-cos($xsup);
	$vsup_r = $xsup*sin($xsup);
	$delta_s = $vsup_c - $vsup_r;

	$vmed_c = $altura-cos($xmed);
	$vmed_r = $xmed*sin($xmed);
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
	{$area = $area + ($altura-cos($i)-$i/pi())*0.0001;}
echo $area; 

?>