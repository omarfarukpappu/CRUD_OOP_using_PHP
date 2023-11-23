<?php
include_once "register.php";
$reg = new Teacher();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$register = $reg->addTeacher($_POST,$_FILES);
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
    <h2>Teacher information Data</h2>
        <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label> 
        <input type="text" name="name" value="" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="" required>

        <label for="Class">Class:</label>
        <input type="Class" name="class" required>

        <label for="subject">Department:</label>
        <input type="text" name="subject" required>

        <label for="phone">Phone:</label>
        <input type="number" name="phone" value="" required>

        <label for="uploaded_pic">Picture:</label>
        <input type="file" name="picture" accept="image/jpg, image/jpeg, image/png" required>

        <label for="text_area">Address:</label>
        <textarea name="address" required></textarea>
        <input type="submit" value="Insert">
    </form>
</div>

</body>
</html>