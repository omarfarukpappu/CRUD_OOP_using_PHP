<?php

// include_once "attendents.php";
include_once "register.php";
$reg = new attendance();

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Attendance list</title>
   <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

   <div class="table-container">

    <div class="row">
        <div class="col-md-6">
            <h3>All Data</h3>
        </div>
        <div class="col-md-6">
            <a href="attendents.php" class="btn btn-info float-right">Add Attendance</a>
        </div>

    </div>
     
      <table>
      <td>
  </a>
</td>
         <thead>
            <tr>
               <th>Class</th>
               <th>Roll</th> 
               <th>Section</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $allAttend=$reg->allAttendents();
            if ($allAttend) {
                while ($row = mysqli_fetch_assoc($allAttend)){
                    echo "<tr>";
                    echo "<td>{$row['class']}</td>";
                    echo "<td>{$row['roll']}</td>";
                    echo "<td>{$row['section']}</td>";

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

      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
