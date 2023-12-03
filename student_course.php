<?php
include_once "register.php";
$reg = new student_courses();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$register = $reg->addStudentCourse($_POST,$_FILES);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="form-container">
<div class="col-md-6">
            <a href="student_course_view.php" class="btn btn-success float-right">View Students Courses</a>
        </div>

    <h2>Student Courses:</h2>

        <form action="" method="post">
        <label for="ID">Student ID:</label> 
        <input type="number" name="ID" value="" required>

        <label for="course_id">Courses ID</label>
        <input type="number" name="course_id" value="" required>
        

        <input type="submit" value="Insert">
        
    </form>

</div>


</body>
</html>