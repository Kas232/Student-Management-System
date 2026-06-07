<?php

session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}

include("db.php");

$count = mysqli_query($con,"SELECT * FROM students");
$total = mysqli_num_rows($count);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Management System</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="container">

<!-- Navbar -->

<div class="navbar">

    <a href="index.php">
        <i class="fa-solid fa-house"></i> Home
    </a>

    <a href="add_students.php">
        <i class="fa-solid fa-user-plus"></i> Add Student
    </a>

    <a href="view_students.php">
        <i class="fa-solid fa-users"></i> View Students
    </a>
<a href="logout.php">
    🚪 Logout
</a>
</div>

<br>

<!-- Heading -->

<h1>
<i class="fa-solid fa-user-graduate"></i>
Student Management System
</h1>

<br>

<!-- Dashboard Card -->

<div class="cards">

    <div class="card">

        <h2><?php echo $total; ?></h2>

        <p>Total Students</p>

    </div>

</div>

<br>

<!-- Search Form -->

<form action="view_students.php"
      method="GET"
      class="search-form">

<input
type="text"
name="search"
class="search-box"
placeholder="🔍 Search Student">

<button type="submit">
Search
</button>

</form>

<br>

<!-- Buttons -->

<a href="add_students.php" class="add-btn">
<i class="fa-solid fa-user-plus"></i>
Add Student
</a>

&nbsp;&nbsp;

<a href="view_students.php" class="add-btn">
<i class="fa-solid fa-users"></i>
View Students
</a>

<br><br><br>

<footer>

<hr>

<br>

Developed by Kashish | Student Management System © 2026

</footer>

</div>

</body>

</html>