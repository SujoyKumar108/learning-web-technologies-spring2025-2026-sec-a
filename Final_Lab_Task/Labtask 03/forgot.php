<?php
session_start();

if(isset($_POST['submit'])){
    if($_POST['email'] == $_SESSION['user']['email']){
        echo "Your password is: " . $_SESSION['user']['password'];
    } else {
        echo "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Form</title>
</head>
<body>
    <div style="text-align:right;">
    <a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a>
    </div> <hr>
    <form method="post" >
        <fieldset>
            <legend>ForgotPassword</legend>
            Enter Email: <input type="email" name="email">
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>

</body>
</html>