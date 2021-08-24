<?php
echo "Percentage ";
echo "<br>";
$perc = percentage(789, 1100);
echo $perc;

function percentage($obtained, $total){
    for ($i=1 ; $i<=10; $i++){
        $percen = ($obtained * 100)/ $total;
        return $percen;
    }
}
echo "<hr>";
?>
<?php
echo "Table ";
echo "<br>";
function table($num){
    for ($i=1 ; $i<=10; $i++){
    echo $num."x".$i."=". $num*$i;
    echo "<br>";
    }
}
table(8);
echo "<hr>";

echo "Addition Subtraction Multiplication Division ";
echo "<br>";
function number ($a, $b){ 
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
     echo "<br>";
    echo $a * $b;
     echo "<br>";
    echo $a / $b;
}
number(70, 30);
echo "<hr>";
?>
<?php

echo "Reverse ";
echo "<br>";
$a = "Islamia College Peshawar";
echo strrev ($a);
echo "<hr>";
echo "<br>";
echo "Length ";
echo "<br>";
echo strlen ($a);
echo "<hr>";


echo "Fibonacci ";
function fibonacci($c,$d){
    for($i=1 ; $i<=10; $i++){
        $fib = $c + $d;
        $d = $c;
        $c= $fib;
        echo $fib. " ";
    }
   
}
    fibonacci(0, 1);
     echo "<hr>";
    


    echo "Factorial ";
    echo "<br>";
    function factorail ($f){
        for($i=1 ; $i<=10; $i++){
        $f = $f * $i;
        echo " ". $f;
        }

    }
    factorail(1);

?>

