<?php

include_once "register.php";
$reg = new register();

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registered Users</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">





</head>
<body>

   <div class="table-container">
   <div class="col-md-6">
            <a href="student.php" class="btn btn-info float-right">Add Student</a>
        </div>
      <h3>All Information</h3>
      <table>
      <td>
  </a>
</td>
         <thead>
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Class</th>
               <th>Roll Number</th>
               <th>Phone</th>
               <th>Picture</th>
               <th>Address</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $allData =$reg->allStudent();
            if ($allData) {
                while ($row = mysqli_fetch_assoc($allData)){
                    echo "<tr>";
                    echo "<td>{$row['ID']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['class']}</td>";
                    echo "<td>{$row['roll']}</td>";
                    echo "<td>{$row['phone']}</td>";
                    echo "<td> <a href='{$row['picture']}'onclick='window.open(this.href,'width=100px, height=100px')'>
                    <img src='{$row['picture']}' alt='' style='width: 70px; height: 70px;'></td>";
                  
                    echo "<td>{$row['address']}</td>";
                    // echo "<td><a href='edit_user.php?id={$row['id']}' class='edit-button'>Update</a></td>";
                    // echo "<td><a href='delete.php?id={$row['id']}' class='edit-button'>Delete</a></td>";
                    // echo "<td><a href='insert.php?id={$row['id']}' class='edit-button'>insert</a></td>";
                    echo "</tr>";
                    // $serial++;

                }
             
            }

            
            ?>
         </tbody>
      </table>


</body>
</html>
