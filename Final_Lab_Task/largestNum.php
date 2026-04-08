<?php
$a = 9;
$b = 8;
$c = 7;

echo "The numbers are : {$a}, {$b}, {$c} <br>";
if($a >= $b && $a >= $c)
    {
        echo "{$a} is the largest number.";
    }
else if($b >= $a && $b >= $c)
    {
        echo "{$b} is the largest number.";
    }
else if($c >= $a && $c >= $b)
    {
        echo "{$c} is the largest number.";
    }
?>