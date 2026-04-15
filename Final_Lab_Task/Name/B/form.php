<?php

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];

    if($name == "")
        {
            echo "input the name";
        }
    else
        {
            echo "Your name is ".$name;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Submission</title>
</head>
<body>
        <form method="post" enctype="">
            <fieldset>
                <legend>Name</legend>
                <input type="text" name="name" value=""/>
                <br>
                <hr>

                <input type="submit" name="submit" value="submit"/>
            </fieldset>
        </form>
</body>
</html>