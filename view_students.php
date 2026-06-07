<?php

include("db.php");

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $query = "SELECT * FROM students
              WHERE name LIKE '%$search%'
              OR email LIKE '%$search%'
              OR course LIKE '%$search%'";
}
else
{
    $query = "SELECT * FROM students";
}

$data = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<head>

<title>View Students</title>
<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="container">

<h1>🎓 Student Management System</h1>

<form method="GET">

<input
type="text"
name="search"
class="search-box"
placeholder="🔍 Search by Name, Email or Course">

<button type="submit">
Search
</button>

</form>

<br>

<a href="add_students.php" class="add-btn">
➕ Add Student
</a>

<br><br>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($data))
{

?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>
<?php echo $row['name']; ?>
</td>

<td>
<?php echo $row['email']; ?>
</td>

<td>
<?php echo $row['course']; ?>
</td>

<td>

<a
href="edit_student.php?id=<?php echo $row['id']; ?>"
class="edit-btn">
✏ Edit
</a>

<a
href="delete_student.php?id=<?php echo $row['id']; ?>"
class="delete-btn"
onclick="return confirm('Are you sure you want to delete this student?')">
🗑 Delete
</a>

</td>

</tr>

<?php

}

?>

</table>

<br><br>

<footer>

<hr>

<br>

Developed by Kashish | Student Management System © 2026

</footer>

</div>

</body>

</html>