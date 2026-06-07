<?php

include("db.php");

$id = $_GET['id'];

$query = "SELECT * FROM students WHERE id='$id'";

$data = mysqli_query($con,$query);

$result = mysqli_fetch_assoc($data);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $update = "UPDATE students
               SET
               name='$name',
               email='$email',
               course='$course'
               WHERE id='$id'";

    $run = mysqli_query($con,$update);

    if($run)
    {
        echo "<script>
        alert('Student Updated Successfully');
        window.location.href='view_students.php';
        </script>";
    }
    else
    {
        echo "Update Failed";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>✏ Edit Student</h1>

<form method="POST">

<input
type="text"
name="name"
value="<?php echo $result['name']; ?>"
required>

<input
type="email"
name="email"
value="<?php echo $result['email']; ?>"
required>

<input
type="text"
name="course"
value="<?php echo $result['course']; ?>"
required>

<button
type="submit"
name="update">
Update Student
</button>

</form>

<br>

<a href="view_students.php" class="add-btn">
← Back
</a>

</div>

</body>
</html>