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
    <title>Insert User Data</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="form-container">
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