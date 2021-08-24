<?php
$i;
for($i=1;$i<10;$i++)
{
	echo "naeem";
	echo "<br>";
}
echo "<br>";
$num=2;
for($i=1; $i<=10; $i++)
{
	echo $num."x".$i."=".$num*$i;
	echo "<br>";
}
echo "<br>";
$num=100;
for($a=1;$a<=$num;$a++){
	if($a%2==0){
		echo "even:$a";
		echo "<br>";
	}else{
		echo "odd:$a";
		echo "<br>";
	}
	
	
}
echo "<br>";

for($a=1;$a<=50;$a++){
	$f=1;
	for ($j=2;$j<=$a-1; $j++) {
		if ($a%$j==0) {
			echo "the composite num : .$a";
			echo("<br>");
			$f=0;
			break;# code...
		}
	}
	if($f==1){
		echo "the prime num: .$a";
		echo("<br>");
	}
}
?>