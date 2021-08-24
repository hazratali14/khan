<?php



echo"1st trangle";

for($i=1;$i<=10;$i++){


echo"<br>";

for($j=1;$j<=$i;$j++){
    echo"*";

}
}
echo"<br>";
echo"2st trangle";
echo"<br>";
for($i=1;$i<=10;$i++){


    echo"<br>";
    
    for($j=10;$j>=$i;$j--){
        echo"*";
    
    }
    }
  



    echo"<br>";
echo"3st trangle";

echo"<br>";
for($i=1;$i<=10;$i++){


echo"<br>";

for($j=1;$j<=$i;$j++){
    echo"*";

}
}
for($i=1;$i<=10;$i++){


    echo"<br>";
    
    for($j=10;$j>=$i;$j--){
        echo"*";
    
    }
    }
    echo"<br>";
echo"4rd trangle";
echo"<br>";

for ($i=1; $i<=5; $i++)  
{  
 for ($j=1; $j<=5; $j++)  
  {  
   echo '* ';  
  }  
   echo "</br>";  
}


echo"5rd trangle";

echo"<br>";
  
$num=10;
for($i=0;$i<$num;$i++){

    echo"<br>";
    for($k=$num;$k>$i+1;$k--)
    {
        echo" ";
    }
    for($j=0;$j<=$i;$j++)
    {
        echo"*";
    }
}
?>