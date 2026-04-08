<?php
$a = 10;
$b = 100;

echo "The odd Numbers Between 10 to 100 : <br>";
for($i = $a ; $i <= $b; $i++)
    {
        if($i % 2 !=0)
            {
                echo "{$i} ";
                if($i == 55)
                    {
                        echo "<br>";
                    }
            }
    }
?>