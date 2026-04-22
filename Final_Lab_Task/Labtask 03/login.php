<?php
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $_SESSION['user']['username'] &&
       $password == $_SESSION['user']['password']){

        $_SESSION['loggedin'] = true;

        // Remember Me (cookie)
        if(isset($_POST['remember'])){
            setcookie("username", $username, time()+3600);
        }

        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LogIn Form</title>
</head>
<body>
    <div style="text-align:right;">
    <a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a>
    </div> <hr>
    <form method="post" >
        <fieldset>
            <legend>LOGIN</legend>
            Username: <input type="text" name="username"><br> <br>
            Password: <input type="password" name="password"><br> <br>

            <input type="checkbox" name="remember"> Remember Me <br> <br>

            <input type="submit" name="submit">
            <a href="forgot.php">Forgot Password?</a>
        </fieldset>
</form>

</body>
</html>