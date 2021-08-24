<?php

$num=100;
for($i=1;$i<=$num;$i++) 
{ 
	if ($i%2==0)
	 {
	 	echo "even number is .$i";
		// code...
		echo "<br>";
	}
	else
	{
		echo "odd number is .$i";

	echo "<br>";
}
}


for ($i=1; $i<=50 ; $i++)
 {
 $f=1;
 for ($j=2; $j<=$i-1 ; $j++) 
 {
 if($i%$j==0){
 	echo "composite number: .$i";
 	 echo "<br>";
 	$f = 0;
 	break;
 	
 } 
  	
  } 
	
	if ($f == 1) {
		echo "prim number: .$i";
		// code...
 echo "<br>";
	}
}
?>