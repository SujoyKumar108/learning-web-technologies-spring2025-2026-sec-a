<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header("Location: login.php");
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
    </div>
    <hr>
    <h2 style="text-align:center;" >Welcome <?php echo $_SESSION['user']['name']; ?></h2>
    <hr>
    <a href="dashboard.php">Dashboard</a><br> <br>
    <a href="viewProfile.php">View Profile</a><br> <br>
    <a href="editProfile.php">Edit Profile</a><br> <br>
    <a href="upload.php">Change Profile Picture</a><br> <br>
    <a href="changePassword.php">Change Password</a><br> <br>
    <a href="logout.php">Logout</a> <br>

</body>         
</html>