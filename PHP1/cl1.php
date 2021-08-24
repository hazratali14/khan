<?php
$a=10;
$b=20;
$c=$a+$b;
echo $c;
echo "<br>";
$a=10;
$b=20;
$c=$a-$b;
echo $c;
echo "<br>";
$a=10;
$b=20;
$c=$a*$b;
echo $c;
echo "<br>";
$a=4;
$b=25;
$c=$a/$b;
echo $c;
echo "<br>";
$a=37;
$b=5;
$c=$a%$b;
echo $c;
?>
<br>
<?php
$a=16;
if($a==16)
{echo "is equal";

}
?>
<br>
<?php
$marks=78;
if($marks>90)
echo"a";
elseif($marks>80)
echo"b";
elseif($marks>70)
echo "c";
else
echo "the bad luck";
?>
<?php
$num=5;
for($i=1; $i<=10; $i++)
{echo $num."*". $i."=".$num*$i;
echo"<br>";
}
