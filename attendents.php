<?php
include_once "register.php";
$reg = new attendance();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$register = $reg->addAttendance($_POST,$_FILES);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert student Data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="form-container">
<div class="col-md-6">
            <a href="attendents_view.php" class="btn btn-success float-right">View Attendance</a>
        </div>

    <h2>Student Attendance:</h2>

        <form action="" method="post">
        <label for="class">Class:</label> 
        <input type="number" name="class" value="" required>

        <label for="roll">Roll Number:</label>
        <input type="number" name="roll" value="" required>

        <label for="section">Section:</label>
        <input type="section" name="section" required>
        <input type="submit" value="Insert">
        
    </form>

</div>


</body>
</html>