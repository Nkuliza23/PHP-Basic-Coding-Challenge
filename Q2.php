<?php
$a=2;
$b=5;

echo "The Value of variable a before is: ".$a;
echo "</br>";
$temp=$a;
$a=$b;
$b=$temp;

echo "The Value of variable a after is: ".$a;
?>