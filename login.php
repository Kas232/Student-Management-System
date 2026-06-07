<?php

session_start();
include("db.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin
              WHERE username='$username'
              AND password='$password'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['admin'] = $username;

        header("Location:index.php");
    }
    else
    {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="login-container">

<h1>
<i class="fa-solid fa-user-shield"></i>
Admin Login
</h1>

<form method="POST">

<input
type="text"
name="username"
placeholder="👤 Username"
required>

<br><br>

<input
type="password"
name="password"
placeholder="🔒 Password"
required>

<br><br>

<button
type="submit"
name="login">

Login

</button>

</form>

<br>


<footer>
<hr><br>
© 2026 Student Management System <br>
Developed by <b>Kashish</b>
</footer>
</div>

</body>

</html>