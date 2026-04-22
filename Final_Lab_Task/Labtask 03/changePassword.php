<?php
session_start();

if(isset($_POST['submit'])){
    if($_POST['current'] == $_SESSION['user']['password']){
        if($_POST['new'] == $_POST['confirm']){
            $_SESSION['user']['password'] = $_POST['new'];
            echo "Password changed!";
        } else {
            echo "New passwords do not match!";
        }
    } else {
        echo "Wrong current password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <div style="text-align:right;">
    <a href="index.php">Home</a> | <a href="login.php">Login</a> | 
    <a href="registration.php">Registration</a>
    </div>
    <hr>
    <form method="post" >
        <fieldset>
            <legend>ChangePassword</legend>
            Current: <input type="password" name="current"><br> <br>
            New: <input type="password" name="new"><br> <br>
            Confirm: <input type="password" name="confirm"><br> <br>

            <input type="submit" name="submit">
        </fieldset>
    </form>

</body>
</html>