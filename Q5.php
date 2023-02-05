<?php
print "<form method=post action=q5.php>";
for($i=0; $i<5; $i++)
{
    print "<input type=text name=txt$i />";
}
    print "<input type=submit value=submit />";
    print "</form>";

$arr=array();
if(isset($_POST['txt0']))
{
    for($i=0; $i<5; $i++)
    {
        $arr[$i] = $_POST['txt'.$i];
    }
    print "<pre>";
    print_r($arr);
    print "<pre>";
$n=1;
$x=0;
for($i=0; $i<5; $i++)
    {
        if($arr[$i]%2==0){
        $n=$arr[$i]*$n;
      }else{
        $x=$arr[$i]+$x;
      }
    }
print "<pre>";
print "the sum of odd numbers is: ";
print_r($x);
print "<pre>";

print "<pre>";
print "the product of even numbers is: ";
print_r($n);
print "<pre>";
}
?>