<?php
echo"Print Fibonacci Series";
$f1=0;
$f2=1;
$n=20;
echo $f1.",";
echo $f2.",";
for($i=0;$i<=$n;$i++)
{
    $f3=$f1+$f2;
    echo $f3.",";
    $f1=$f2;
    $f2=$f3;
}
?>