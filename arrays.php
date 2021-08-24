<?php 
////MAXIMUM AND MINIMUM NUMBER///////
   $number = array(10,15,20,100,25,30);

    for ($i=0; $i<count($number); $i++){
        //Find maximum number by max function.
        echo"<br>";
        if ($number[$i] == max($number)){
            //Print maximum number.

            echo " The Max Number is: $number[$i]" ;
        }
        //Find minimum number by min function.
        elseif ($number[$i] == min($number)) {
            //Print minimum  number.
            echo " The Min Number is: $number[$i] <br>";
        }
    }

echo"<hr>";
 /////Ascending And Descending//////
$num=array(32,12,43,1,53,4,13,44,34);
for($i=0; $i<sizeof($num);$i++){
for ($j=$i; $j<sizeof($num); $j++) {
if($num[$j]<$num[$i]) {
		$temp=$num[$j];
		$num[$j]=$num[$i];
		$num[$i]=$temp;

   } 

 } 
}

 echo"Ascending Order:" ;
 echo "<br>";
 for ($i=0; $i<sizeof($num); $i++) {
 echo $num[$i];

 echo "<br>";
 	
 }
   	
$num=array(32,12,43,1,53,4,13,44,34);
for($i=0; $i<sizeof($num);$i++){
for ($j=$i; $j<sizeof($num); $j++) {
if($num[$j]>$num[$i]) {
        $temp=$num[$j];
        $num[$j]=$num[$i];
        $num[$i]=$temp;

   } 

 } 
}
 echo"Desending Order:" ;
 echo "<br>";
 for ($i=0; $i<sizeof($num); $i++) {
 echo $num[$i];

 echo "<br>";
 }
 echo "<hr>";

 //// EVEN AND ODD NUMBERS//////////
 $num=array(32,12,43,1,53,4,13,44,34);
 for ($i=0; $i<sizeof($num); $i++)
  { 
     // FOR LOOP
        if($num[$i]%2==0)
         {
        // IF STATEMENT
        echo"Even no is : ".$num[$i];
        echo"<br>";
         }
         else 
            {
                echo"Odd no is : ".$num[$i];
                echo"<br>";
            }
 }
 echo"<hr>";
 //  ARRAY PUSH//////////
  $arr=array(4,35,65,73,80,90,100);
        array_push($arr,50);
        array_push($arr,60);
for ($i=0; $i<sizeof($arr) ; $i++)

 { 
        
        echo $arr[$i];
        echo"<br>";
}




?>


