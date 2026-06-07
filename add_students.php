<?php
include("db.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $query = "INSERT INTO students(name,email,course)
              VALUES('$name','$email','$course')";

    $data = mysqli_query($con,$query);

    if($data)
    {
        echo "<script>
        alert('Student Added Successfully');
        window.location.href='view_students.php';
        </script>";
    }
    else
    {
        echo "Failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
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

</div>

<br>

<div class="container">

<h1>➕ Add Student</h1>

<form method="POST">

<input type="text"
name="name"
placeholder="Enter Name"
required>

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="text"
name="course"
placeholder="Enter Course"
required>

<button type="submit"
name="submit">
Add Student
</button>

</form>

<br>

<a href="view_students.php" class="add-btn">
👨‍🎓 View Students
</a>
<footer>

<hr>

<br>

Developed by Kashish | Student Management System © 2026

</footer>

</div>

</body>
</html>