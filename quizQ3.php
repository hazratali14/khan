<?php
isEven();	
isOdd();
primenum();
isCompo();

function isEven($value='')
{		
	echo 'Even Numbers are: ';
	for($input=1;$input<=50;$input++){
		if($input%2==0){
			echo $input." , ";  
		}
	}
	echo '<br><hr>';

}
function isOdd($value='')
{		
	echo 'Odd Numbers are: ';
	for($input=1;$input<=50;$input++){
		if($input%2==1){
			echo $input." , ";  
		}
	}
	echo '<br><hr>';
}
function primenum()
{echo "Prime Numbers Are ";  
$count = 0;  
$num = 2;  
while ($count < 25 )  
{  
	$div_count=0;  
	for ( $i=1; $i<=$num; $i++)  
	{  
		if (($num%$i)==0)  
		{  
			$div_count++;  
		}  
	}  
	if ($div_count<3)  
	{  
		echo $num." , ";  
		$count=$count+1;  
	}  
	$num=$num+1;  
}  
echo '<br>';
while ($count < 50 )  
{  
	$div_count=0;  
	for ( $i=1; $i<=$num; $i++)  
	{  
		if (($num%$i)==0)  
		{  
			$div_count++;  
		}  
	}  
	if ($div_count<3)  
	{  
		echo $num." , ";  
		$count=$count+1;  
	}  
	$num=$num+1;  
} 
echo '<br><hr>';

}

function isCompo(){
	echo "Composite numbers are: ";
	for($num=1;$num<=50;$num++){

		$count = 0;

		for($i=1; $i<=$num; $i++)
		{
			if($num % $i == 0)
				$count++;
		}

		if($count > 2)
			echo $num." , ";  


	}
	echo "<br><hr>";
}
?>