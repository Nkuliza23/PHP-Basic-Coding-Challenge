<?php
print "<form method=post action=q4.php>";
for($i=0; $i<6; $i++)
{
    print "<input type=text name=txt$i />";
}
    print "<input type=submit value=submit />";
    print "</form>";

$arr=array();
if(isset($_POST['txt0']))
{
    for($i=0; $i<6; $i++)
    {
        $arr[$i] = $_POST['txt'.$i];
    }
    PRINT"<pre>";
    print_r($arr);

    print"</br>";print"</br>";print"</br>";
    echo"<B>THE NUMBER OF TIMES EACH NAME WAS WRITTEN:</B>";
    
    PRINT"<PRE>";
    PRINT"<B>";
    print_r(array_count_values($arr));
    PRINT"</B>";
    PRINT"<PRE>";
}

?>