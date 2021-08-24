<?php
$limit=20;
$n1=0;
$n2=1;
$x=0;
for ($i=0; $i<=$limit ; $i++) { 
	echo $n1;
	$n1=$n1+$n2;
	$n2=$x;
	$x=$n1;
	echo "<br/>";
	# code...
}
echo "<br>";
$num1=0;
$num2=1;
$limit=10;
while ( $limit>0) {
	$temp=$num1+$num2;
	echo $temp;
	echo "<br>";
	$num1=$num2;
	$num2=$temp;
	$limit--;


	# code...
}

?>