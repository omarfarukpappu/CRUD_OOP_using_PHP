<?php
include_once "register.php";
$reg = new register();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$register = $reg->addRegister($_POST,$_FILES);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="form-container">
<div class="col-md-6">
            <a href="Student_view.php" class="btn btn-success float-right">View Student Data</a>
        </div> 
    <h2>Student information Data</h2>
        <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label> 
        <input type="text" name="name" value="" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="" required>

        <label for="Class">Class:</label>
        <input type="Class" name="class" required>

        <label for="Roll_number">Roll number:</label>
        <input type="number" name="Roll_number" required>

        <label for="phone">Phone:</label>
        <input type="number" name="phone" value="" required>

        <label for="uploaded_img">Picture:</label>
        <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" required>

        <label for="text_area">Address:</label>
        <textarea name="address" required></textarea>
        <input type="submit" value="Insert">
    </form>
</div>

</body>
</html>