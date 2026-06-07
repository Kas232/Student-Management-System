<?php

include("db.php");

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id='$id'";

$data = mysqli_query($con,$query);

if($data)
{
    echo "<script>
    alert('Student Deleted Successfully');
    window.location.href='view_students.php';
    </script>";
}
else
{
    echo "<script>
    alert('Delete Failed');
    window.location.href='view_students.php';
    </script>";
}

?>