<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Combinatoria</title>
   <style rel="stylesheet" type="text/css">
      pre {
		  font-size:14px;
	  }
	  div {
		  width:160px;
		  border:solid;
		  padding:30px;
	  }
   </style>
</head>

<body>
  <div>
  <?php
     function factorial($n)
	 {
		 if ($n == 1)
		 { 
			 return 1;
		 }
		 else
		 {
			 return $n * factorial($n -1);
		 }
		 return $result;
	 }
	 function combinatoria($n, $m)
	 {
		  return factorial($n)/(factorial($m) * factorial($n - $m));
	 }
	 echo "<pre>
n        n
   =  --------
m     m!(n-m)!
  
Para:
n = 5 y m = 10</pre>";
     echo "El resultado es: ".(combinatoria(5, 2));     
  ?>
  </div>
</body>
</html>