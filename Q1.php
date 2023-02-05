<?php
$a1=array(1,2,3,4,5,6,7,8,9,10);
$a2=array(1,2,3,6,7);

$result=array_diff($a1,$a2);
echo"<b>THE MISSING NUMBERS ARE: </b>";
print"<pre>";
print_r($result);
print"<pre>";
?>