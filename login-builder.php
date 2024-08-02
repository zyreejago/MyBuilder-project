<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['user'];
  $password = $_POST['pass'];


  if (!empty($username) && !empty($password)) {
    $query = "select * from form where username = '$username' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['password'] == $password) {
          header("location: setelah-login.php ");
          die;
        }
      }
    }
    echo "<script type='text/javascript'> alert('SALAH')</script> ";
  } else {
    echo "<script type='text/javascript'> alert('pelih')</script> ";
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Animated Login Form | CodingNepal</title>
  <link rel="stylesheet" href="style-login-builder.css" />
</head>

<body>
  <div class="center">
    <h1><a href="Project uts coba coba.html">Login</a></h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" name="user" required />
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="pass" required />
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login" />
      <div class="signup_link">
        Not a member? <a href="regist-builder.php">Signup</a>
      </div>
    </form>
  </div>
</body>

</html>