<?php


    $name = $_GET['name'];

    if($name == "")
        {
            echo "input the name";
        }
    else
        {
            echo "Your name is ".$name;
        }
        
?>