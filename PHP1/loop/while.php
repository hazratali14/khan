<?php

$num1=0;
$num2=1;

$limit=7;

while ($limit>0)
 {
   $temp= $num1+$num2;
   echo ''.$temp;

   $num1 = $num2;
   $num2 = $temp;
   $limit--;

}

?>