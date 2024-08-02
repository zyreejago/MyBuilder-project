<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $password1 = $_POST['pass1'];

    if (!empty($email) && !empty($password) && !empty($password1) && !is_numeric($email)) {
        $query = "insert into form(username, email, password, password1 ) values ('$username','$email','$password','$password1')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script> ";
    } else {
        echo "<script type='text/javascript'> alert('Coba Ulang')</script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration or Sign Up form in HTML CSS | CodingLab</title>
    <link rel="stylesheet" href="style-regist-builder.css" />
</head>

<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="#" method="post">
            <div class="input-box">
                <input type="text" placeholder="Enter your username" name="username" required />
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="email" required />
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" name="pass" required />
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="pass1" required />
            </div>
            <div class="policy">
                <input type="checkbox" />
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Register Now" />
            </div>
            <div class="text">
                <h3>
                    Already have an account?
                    <a href="login-builder.php">Login now</a>
                </h3>
            </div>
        </form>
    </div>
</body>

</html>