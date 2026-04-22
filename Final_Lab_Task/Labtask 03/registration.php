<?php
session_start();
print_r($_SESSION);

if(isset($_POST['submit'])){
    $_SESSION['user'] = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "gender" => $_POST['gender'],
        "dob" => $_POST['dob']
    ];

    echo "Registration successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <div style="text-align:right;">
    <a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a>
    </div> <hr>
    <form method="post" >
        <fieldset>
            <legend>REGISTRATION</legend>
            Name: <input type="text" name="name"><br> <br>
            Email: <input type="email" name="email"><br> <br>
            Username: <input type="text" name="username"><br> <br>
            Password: <input type="password" name="password"><br> <br>

            Gender:
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female

            <br> <br>

            DOB: <input type="date" name="dob"><br> <br>

            <input type="submit" name="submit">
            <input type="reset" name="reset">
        </fieldset>
</form>

</body>
</html>