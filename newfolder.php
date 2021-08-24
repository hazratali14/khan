<?php
$fact=20;
for ($i=1; $i<=20; $i++) {

$fact=$fact*$i;
echo "The factorial of the  number  is : ".$fact;
echo "<br>";
 }


 for ($i=1; $i<=50;$i++) {
 if ($i%2==0) {
    
  	echo "Even on is :".$i;
  	echo "<br>";
 
 }
 else{
 	echo "odd on is :".$i;
 }
}

for ($i=1; $i<=50; $i++) 
{
	$f=1;
	for($j=2; $j<=$i-1; $j++){ 
	// code...
		if ($i%$j==0){
		echo"composite number is :".$i;
		$f=0;
		break;
		}
	}
	if ($f==1)
	{
	echo "prime number is:".$i;

}
}
?>









?>




















