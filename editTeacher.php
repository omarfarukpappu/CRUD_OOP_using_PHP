<?php
include_once "register.php";
$reg = new Teacher();
if (isset($_GET['ID'])) {
    $ID=base64_decode($_GET['ID']);
    
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$register = $reg->UpdateTeacher($_POST,$_FILES,$ID);
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
            <a href="teacher_view.php" class="btn btn-success float-right">View Teacher info</a>
        </div>
    <h2>Update Teacher information</h2>
    <?php 
        $gettech =$reg->getTeacherByID($ID);
        if ($gettech) {
            while ($row= mysqli_fetch_assoc($gettech)) {
             ?>
         <form action="" method="post" enctype="multipart/form-data">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

                    <label for="Class">Class:</label>
                    <input type="text" name="class" value="<?php echo $row['class']; ?>" required>

                    <label for="subject">Department:</label>
                    <input type="text" name="subject" value="<?php echo $row['subject']; ?>" required>

                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" value="<?php echo $row['phone']; ?>" required>

                    <label for="uploaded_pic">Picture:</label>
                    <input type="file" name="picture" accept="image/jpg, image/jpeg, image/png" required>

                    <label for="text_area">Address:</label>
                    <textarea name="address" required><?php echo $row['address']; ?></textarea>
                    <input type="submit" value="Update">
                </form>


                <?php
                
               
            }
        }


            ?>
       
</div>

</body>
</html>